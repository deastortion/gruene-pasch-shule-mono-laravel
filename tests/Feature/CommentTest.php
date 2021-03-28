<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    /* ==== COMMENT TESTS ===== */


    // Tests the creation of a comment
    public function testCreationOfComment()
    {
        $response = $this->actingAs($this->createUser())->post('/comments', [
            'content' => 'Test content',
            'event_id' => $this->createUser()->id,
        ]);

        $this->assertCount(1, Comment::all());

        $response->assertStatus(302);
    }

    // Tests the content field comment validation
    public function testCommentContentIsRequired()
    {
        $response = $this->actingAs($this->createUser())->post('/comments', [
            'content' => '',
            'event_id' => $this->createUser()->id,
        ]);

        $response->assertSessionHasErrors('content');
    }

    // Tests comment deleting
    public function testDeletingOfComment()
    {

        $this->actingAs($this->createUser())->post('/comments', [
            'content' => 'Test content',
            'event_id' => $this->createEvent()->id,
        ]);
        $this->assertCount(1, Comment::all());

        $response = $this->actingAs($this->createAdmin())->delete('/dashboard/comments/' . Comment::first()->id);

        $this->assertCount(0, Comment::all());

        $response->assertStatus(302);
    }





    private function createUser()
    {
        return User::factory()->create();
    }
    private function createEvent()
    {
        return Event::factory()->create();
    }
    private function createAdmin()
    {
        return User::factory([
            'is_admin' => 1,
        ])->create();
    }
}

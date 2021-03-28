<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class EventTest extends TestCase
{
    use RefreshDatabase;


    public function testCreationOfEvent()
    {
        // Making some data for a request
        $data = [
            'title' => 'Test title',
            'description' => 'Test description',
            'image' => UploadedFile::fake()->image('avatar.jpg'),
            'content' => 'Test content',
        ];

        // Make an HTTP request as an admin user
        $response = $this->actingAs($this->factorAdmin())->post('/dashboard/events', $data);


        // Check if an event was created
        $this->assertCount(1, Event::all());

        // Check for redirect to a specific uri
        $response->assertRedirect('/dashboard/events');
    }




    public function testUpdatingOfEvent()
    {
        $data = [
            'title' => 'Test title',
            'description' => 'Test description',
            'image' => UploadedFile::fake()->image('avatar.jpg'),
            'content' => 'Test content',
        ];

        $updatedData = [
            'title' => 'Test updated title',
            'description' => 'Test updated description',
            'image' => UploadedFile::fake()->image('avatar.png'),
            'content' => 'Test updated content',
        ];

        $admin = $this->factorAdmin();




        $this->actingAs($admin)->post('/dashboard/events', $data);

        $event = Event::first();

        $response = $this->actingAs($admin)->put('/dashboard/events/' . $event->id, $updatedData);

        $this->assertEquals($updatedData['title'], Event::first()->title);
        $this->assertEquals($updatedData['description'], Event::first()->description);
        // $this->assertEquals($updatedData['image'], Event::first()->image);
        $this->assertEquals($updatedData['content'], Event::first()->content);

        $response->assertStatus(302);
    }


    public function testDeletingOfEvent()
    {
        $data = [
            'title' => 'Test title',
            'description' => 'Test description',
            'image' => UploadedFile::fake()->image('avatar.jpg'),
            'content' => 'Test content',
        ];

        $admin = $this->factorAdmin();

        $this->actingAs($admin)->post('/dashboard/events', $data);

        $event = Event::first();
        $this->assertCount(1, Event::all());

        $response = $this->actingAs($admin)->delete('/dashboard/events/' . $event->id);

        $this->assertCount(0, Event::all());

        $response->assertStatus(302);
    }



    // VALIDATION
    public function testEventTitleIsRequired()
    {
        $data = [
            'title' => '',
            'description' => 'Test description',
            'image' => UploadedFile::fake()->image('avatar.jpg'),
            'content' => 'Test content',
        ];

        $response = $this->actingAs($this->factorAdmin())->post('/dashboard/events', $data);

        $response->assertSessionHasErrors('title');
    }

    public function testEventDescriptionIsRequired()
    {
        $data = [
            'title' => 'Test title',
            'description' => '',
            'image' => UploadedFile::fake()->image('avatar.jpg'),
            'content' => 'Test content',
        ];

        $response = $this->actingAs($this->factorAdmin())->post('/dashboard/events', $data);

        $response->assertSessionHasErrors('description');
    }

    private function factorAdmin()
    {
        return  User::factory([
            'is_admin' => 1,
        ])->create();
    }
}

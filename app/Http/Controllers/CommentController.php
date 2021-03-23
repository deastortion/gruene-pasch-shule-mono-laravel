<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentCreateRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(CommentCreateRequest $request)
    {
        Comment::create([
            'event_id' => $request->event_id,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return back();
    }
}

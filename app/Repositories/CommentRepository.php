<?php


namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{
    public function all($search = null, $perPage = 10)
    {
        if (!empty($search)) {
            return Comment::query()
                ->where('content', 'LIKE', "%{$search}%")
                ->paginate($perPage);
        } else {
            return Comment::latest()->paginate($perPage);
        }
    }


    public function update($input, $comment)
    {
        $comment->update([
            'content' => $input->content,
        ]);
    }

    public function delete($commentId)
    {
        $ids = explode(",", $commentId);

        Comment::whereIn('id', $ids)->delete();
    }
}

<?php

namespace App\Repositories\Interfaces;

interface CommentRepositoryInterface
{
    public function all($search = null);
    public function update($input, $comment);
    public function delete($commentId);
}

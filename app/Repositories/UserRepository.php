<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function getPaginatedUsers($search = null, $perPage = 12)
    {
        if (!empty($search)) {
            return User::where([
                ['is_admin', '!=', 1],
                [function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%");
                }],
            ])->paginate($perPage);
        } else {
            return User::orderBy('created_at', 'desc')->where('is_admin', '!=', 1)->paginate($perPage);
        }
    }

    public function delete($userId)
    {
        $ids = explode(",", $userId);
        User::whereIn('id', $ids)->delete();
    }
}

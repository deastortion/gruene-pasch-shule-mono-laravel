<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function getPaginatedUsers($search = null, $perPage = 12);

    public function delete($userId);
}

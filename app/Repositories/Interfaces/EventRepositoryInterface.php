<?php

namespace App\Repositories\Interfaces;

interface EventRepositoryInterface
{
    public function all($search = null);

    public function getById($event);

    public function update($input, $event);

    public function create($input);

    public function delete($eventId);
}

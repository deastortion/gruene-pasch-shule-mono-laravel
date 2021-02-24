<?php

namespace App\Repositories\Interfaces;

interface EventRepositoryInterface
{
    public function all($query = null);

    public function getById($eventId);

    public function update($validatedInput, $eventId);

    public function create($validatedInput);

    public function delete($eventId);
}

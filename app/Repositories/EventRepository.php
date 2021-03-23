<?php


namespace App\Repositories;

use App\Models\Event;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class EventRepository implements EventRepositoryInterface
{
    public function all($search = null, $perPage = 12)
    {
        if (!empty($search)) {
            return Event::query()
                ->where('title', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->paginate($perPage);
        } else {
            return Event::latest()->paginate($perPage);
        }
    }

    public function getById($event)
    {
        return $event;
    }

    public function create($input)
    {

        $event = Event::create($input->only(['title', 'description', 'content']));

        $this->handeImage($input->image, $event);

        $event->update();
    }

    public function update($input, $event)
    {

        $event->update($input->only(['title', 'description', 'content']));

        if (!empty($input->image)) {
            $this->deleteImage($event->image);
            $this->handeImage($input->image, $event);
        }

        $event->update();
    }

    public function delete($eventId)
    {
        $ids = explode(",", $eventId);

        Event::whereIn('id', $ids)->delete();

        foreach ($ids as $id) {
            Storage::deleteDirectory('/public/events/' . $id);
        }
    }


    private function handeImage($image, $event)
    {
        $imageName = 'image.' . $image->getClientOriginalExtension();
        $image->storeAs('public/events/' . $event->id, $imageName);
        $event->image = '/storage/events/' . $event->id . '/' . $imageName;
    }

    private function deleteImage($image)
    {
        $imagePath = str_replace('/storage', '', $image);
        Storage::delete('/public' . $imagePath);
    }
}

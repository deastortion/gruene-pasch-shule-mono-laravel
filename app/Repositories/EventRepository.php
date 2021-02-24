<?php


namespace App\Repositories;

use App\Models\Event;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class EventRepository implements EventRepositoryInterface
{
    public function all($query = null, $perPage = 12)
    {

        if (!empty($query)) {
            return Event::where('title', 'LIKE', '%' . $query . '%')->paginate($perPage);
        } else {
            return Event::paginate($perPage);
        }
    }

    public function getById($eventId)
    {
        return Event::where('id', $eventId)->firstOrFail();
    }

    public function create($validatedInput)
    {

        $event = new Event;

        $event->title = $validatedInput->title;

        $event->content = $validatedInput->content;

        $event->description = $validatedInput->description;

        $imageName = 'image' . '_' . time() . '.' . $validatedInput->image->getClientOriginalExtension();
        $validatedInput->image->storeAs('public/images', $imageName);
        $event->image = '/storage/images/' . $imageName;

        $event->save();
    }

    public function update($validatedInput, $eventId)
    {

        $event = Event::where('id', $eventId)->firstOrFail();

        $event->title = $validatedInput->title;

        $event->description = $validatedInput->description;

        $event->content = $validatedInput->content;

        // dd($validatedInput->image);

        if (!empty($validatedInput->image)) {
            $eventImage = str_replace('/storage', '', $event->image);
            Storage::delete('/public' . $eventImage);

            $imageName = 'image' . '_' . time() . '.' . $validatedInput->image->getClientOriginalExtension();
            $validatedInput->image->storeAs('public/images', $imageName);
            $event->image = '/storage/images/' . $imageName;
        }

        $event->update();
    }

    public function delete($eventId)
    {
        $ids = explode(",", $eventId);

        Event::whereIn('id', $ids)->delete();
    }
}

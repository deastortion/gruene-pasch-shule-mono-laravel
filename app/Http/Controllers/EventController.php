<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request, $perPage = 6)
    {
        $search = $request->search;

        $events = Event::query()
            ->latest()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%');
            })
            ->paginate($perPage, ['id', 'title', 'description', 'image', 'created_at'])
            ->onEachside(1);

        return view('pages.frontend.events.index', ['events' => $events]);
    }

    public function show(Event $event)
    {
        return view('pages.frontend.events.show', ['event' => $event]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Constructor with some middlewares
    public function __construct()
    {
        $this->middleware('auth')->only(['show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request);
        $query = $request->search;
        // dd('asd');
        if (!empty($query)) {
            $events = Event::where('title', 'LIKE', '%' . $query . '%')->paginate(8);
        } else {
            $events = Event::paginate(8, ['id', 'title', 'description', 'image', 'created_at'])->onEachSide(1);
        }
        
        return view('pages.frontend.events.index', ['events' => $events]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('pages.frontend.events.id', ['event' => $event]);
    }

   
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(8);
        return view('pages.backend.events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'description' => 'required|max:255',
        ]);

        $event = new Event;
        $event->title = $validated['title'];
        $event->content = $validated['content'];
        $event->save();


        return redirect('/dashboard/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('pages.backend.events.id', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('pages.backend.events.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        // dd($request);
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'description' => 'required|max:255',
            // 'image' => 'required|file|max:512',
        ]);

        $event->title = $validated['title'];
        $event->description = $validated['description'];
        $event->content = $validated['content'];
        $event->update();

        Session::flash('flash_message', 'Task successfully added!');

        // return redirect('/dashboard/events');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        Event::where('post_id',$id)->delete();
        return redirect()->back();
    }
    public function multiDelete(Request $request)
    {
        dd($request);
        Event::where('post_id',$request->ids)->delete();
        return redirect('dashboard/users');
    }
    
}

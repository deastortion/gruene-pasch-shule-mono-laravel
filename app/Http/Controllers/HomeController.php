<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    public function __invoke()
    {
        $events = Event::latest()->take(3)->withCount('comments')->get()->makeHidden(['content', 'updated_at']);
        return view('pages.frontend.home', ['events' => $events]);
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Comment;
use App\Models\Event;
use App\Models\User;

class HomeController extends Controller
{
    public function __invoke()
    {
        $events = Event::latest()->take(5)->get();
        $users = User::where('is_admin', '!=', 1)->latest()->take(5)->get();
        $eventsCount = Event::count();
        $usersCount = User::where('is_admin', '!=', 1)->count();
        $commentsCount = Comment::count();

        return view('pages.backend.home', [
            'events' => $events,
            'users' => $users,
            'eventsCount' => $eventsCount,
            'usersCount' => $usersCount,
            'commentsCount' => $commentsCount,
        ]);
    }
}

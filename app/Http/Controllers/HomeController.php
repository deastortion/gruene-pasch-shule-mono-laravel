<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {
        $events = Event::latest()->take(3)->get();
        return view('pages.frontend.home', ['events' => $events]);
    }

    public function dashboard()
    {


        $events = Event::latest()->take(5)->get();
        $users = User::latest()->take(5)->get();
        $eventsCount = Event::count();
        $usersCount = User::count();

        return view('pages.backend.home', [
            'events' => $events,
            'users' => $users,
            'eventsCount' => $eventsCount,
            'usersCount' => $usersCount
        ]);
    }

    public function redirectAfterLogin()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->is_admin) {
            return redirect('/dashboard');
        }

        return redirect('/');
    }


    public function changeLanguage(Request $request) {
        // dd($request);
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }


}

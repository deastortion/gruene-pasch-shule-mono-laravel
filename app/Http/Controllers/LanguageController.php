<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function __invoke(Request $request)
    {
        App::setLocale($request->lang);
        session(['locale' => $request->lang]);

        return back();
    }
}

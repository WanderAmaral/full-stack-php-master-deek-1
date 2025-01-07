<?php

namespace App\Http\Controllers;

use App\Models\Home;

class SiteController extends Controller
{
    public function home()
    {
        $home = Home::where('id', 1)->first();

        // dd($home);

        return view('site.home', ['home' => $home]);
    }
}

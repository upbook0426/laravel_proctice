<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('user.home.index');
    }

    public function test()
    {
        return sprintf('<div>%s</div><a href="%s">言語切替</a>', __('lang.home.hello'), locale_change_url());
    }
}

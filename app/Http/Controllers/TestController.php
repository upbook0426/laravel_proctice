<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Test;

class TestController extends Controller
{
    //
    public function index ()
    {
        $records = Test::get();
        return view( 'index', compact('records'));
    }
}

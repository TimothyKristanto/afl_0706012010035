<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    //
    function index(){
        return view('home', [
            'title'=>'Home',
            'backgroundRows'=>8
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index() 
    {
        return "Selamat Belajar Framework Laravel 11";
    }

    public function ambilFile()
    {
    return view('ambilfile');
    }

    public function getlorem()
    {
    return view('v_html.getlorem');
    }
}

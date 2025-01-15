<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    function index() {
        return view('home.index');
    }
    function about () {
        return view('home.about');
    }
}

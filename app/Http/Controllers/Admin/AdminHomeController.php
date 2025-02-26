<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    function index() {
        return view('admin.home.index')->with([
            "title" => "Admin",
            "subtitle" => "Admin Panel"
        ]);
    }
}

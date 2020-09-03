<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function aboutYou() {
        return view('aboutyou');
    }

    public function trip() {
        return view('trip');
    }
}

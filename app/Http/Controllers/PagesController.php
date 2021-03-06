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

    public function budget() {
        return view('budget');
    }

    public function activities() {
        return view('activities');
    }

    public function guests() {
        return view('guests');
    }

    public function itinerary() {
        return view('itinerary');
    }

    public function trip() {
        return view('trip');
    }
}

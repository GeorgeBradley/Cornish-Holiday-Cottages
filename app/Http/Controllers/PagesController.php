<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function properties(){
        return view('pages.properties');
    }

    public function bookings(){
        return view ('pages.bookings');
    }

    public function contact(){
        return view('pages.contact');
    }
}

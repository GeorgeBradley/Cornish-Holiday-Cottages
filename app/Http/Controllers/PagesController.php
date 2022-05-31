<?php

namespace App\Http\Controllers;

use App\Models\website_info;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $website_info = website_info::find(1);
        return view('index', [
            'website_info' =>  $website_info
          
        ]);
    }
   
    public function header() {
        $website_info = website_info::find(1);
        return view('layouts.header', [
            'website_info' =>  $website_info
          
        ]);
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

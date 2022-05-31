<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteSettingsController extends Controller
{
    public function index() {
        return view('pages.websiteSettings');
    }

}

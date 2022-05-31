<?php

namespace App\Http\Controllers;

use App\Models\website_info;
use Illuminate\Http\Request;

class WebsiteSettingsController extends Controller
{
    public function index() {
        $website_info = website_info::find(1);
   
   


      
        return view('pages.websiteSettings', [
            'website_info' =>  $website_info
          
        ]);
    }


}

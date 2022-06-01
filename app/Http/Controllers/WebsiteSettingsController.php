<?php

namespace App\Http\Controllers;

use App\Models\website_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteSettingsController extends Controller
{
    public function index() {
        $website_info = website_info::find(1);
   
   


      
        return view('pages.websiteSettings', [
            'website_info' =>  $website_info
          
        ]);
    }

    public function update(Request $request) {

        $website_info = website_info::find(1);
        $website_info->website_name = $request->website_name;
        $website_info->website_logo_path = $request->website_logo;
        $website_info->page_title = $request->page_title;
        $website_info->page_description = $request->page_description;
        $website_info->admin_email_address = $request->admin_email_address;
        $website_info->tagline = $request->tagline;
      
        $website_info->save();
        return redirect('/websiteSettings');
        


       
    }


}

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

        dd($request);
        $update = DB::table('website_infos') ->where('id', 1)->limit(1)->update
        ( 
            [ 
            'website_name' => $request['website_name'], 
            'website_logo_path' => $request['website_logo_path'], 
            'page_title' => $request['page_title'], 
            'page_description' => $request['page_description'],
            'admin_email_address' => $request['admin_email_address'],
            'tagline' => $request['tagline'],
            ]
        ); 


    }

}

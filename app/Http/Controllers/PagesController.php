<?php

namespace App\Http\Controllers;

use App\Mail\BookingForm;
use App\Models\website_info;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

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

    public function booking(){
        return view ('pages.bookings');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function send_mail(Request $request)
    {

  
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255' ], 
            'last_name' => ['required', 'string', 'max:255' ], 
            'email' => ['required', 'string', 'email', 'max:255'],
            'enquiry_title' => ['required', 'string', 'max:255' ], 
            'message' => ['required', 'string', 'max:255']
        ]);

        $contact = [
            'first_name' => $request['first_name'], 
            'last_name' => $request['last_name'], 
            'email' => $request['email'],
            'enquiry_title' => $request['enquiry_title'],
            'message' => $request['message'],
          
        ];

    
        Mail::to('mail@ws239618-awt.remote.ac')->send(new ContactFormMail($contact));
        
        return redirect()->route('contact')->with(['status' => 'Your message has been sent!']);
    }



    public function send_booking_mail(Request $request)
    {



  
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255' ], 
            'last_name' => ['required', 'string', 'max:255' ], 
            'date_from' => ['required', 'string', 'max:255' ], 
            'property_name' => ['required', 'string', 'max:255' ], 
            'date_to' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'enquiry_title' => ['required', 'string', 'max:255' ], 
            'message' => ['required', 'string', 'max:255']
        ]);

        $contact = [
            'first_name' => $request['first_name'], 
            'last_name' => $request['last_name'], 
            'property_name' => $request['property_name'], 
            'date_from' => $request['date_from'], 
            'date_to' => $request['date_to'], 
            'email' => $request['email'],
            'enquiry_title' => $request['enquiry_title'],
            'message' => $request['message'],
          
        ];

    
        Mail::to('mail@ws239618-awt.remote.ac')->send(new BookingForm($contact));
        
        return redirect()->route('booking')->with(['status' => 'Your message has been sent!']);
    }
}

@extends('layouts.app')


@section('content')

<section class="m-t-3 container m-b-2">

<div class="social flex flex-jc-sb flex-fw-w w-100 gap-4 flex-jc-c">
<div class="flex social-links flex-fd-c flex-jc-c gap-4">

    <div class="flex flex-fd-c w-100 flex-jc-s gap-4">
        <h3>Contact us</h3>
        <div class="flex gap-2">
            <span class="fa-brands fa-facebook"></span>
            <span class="fa-brands fa-twitter"></span>
            <span class="fa-brands fa-linkedin"></span>
            <span class="fa-brands fa-discord"></span>
            <span class="fa-brands fa-instagram"></span>
        </div>
    
    </div>
    <div class="flex flex-fd-c w-100 flex-jc-s gap-4">
     
        <a href="" class="flex gap-1"><i class="fa-solid fa-phone"></i>01934 323249</a>
        <a href="" class="flex gap-1"><i class="fa-solid fa-at"></i>mail@ws239618-awd.remote.ac</a>
    </div>
</div>

    <form method="POST" action="{{ route('addContact') }}"  class="contact-form flex flex-jc-c flex-fd-c flex-fs-1 mw-100">
        @csrf
        <div class="flex flex-fw-w gap-1">
            <div class="flex flex-fd-c flex-fg-1 gap-1">
                <label for="">First Name</label>
                <input type="text" name="first_name">
                @error('first_name')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
            @enderror
            </div>
            <div class="flex flex-fd-c flex-fg-1 gap-1">
                <label for="">Last Name</label>
                <input type="text" name="last_name">
                @error('last_name')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
            @enderror
            </div>
          
        </div>
    
    
    <div class="flex flex-fd-c gap-1">
        <label for="">Your Email</label>
        <input type="email" name="email">
        @error('email')
        <div class="error-message-container">
            <p class="error-message">{{ $message }}</p>
        </div>
    @enderror
    </div>
    
    <div class="flex flex-fd-c gap-1">
        <label for="">Enquiry Title</label>
        <input type="text" name="enquiry_title">
        @error('enquiry_title')
        <div class="error-message-container">
            <p class="error-message">{{ $message }}</p>
        </div>
    @enderror
    </div>
    <div class="flex flex-fd-c gap-1">
        <label for="">Enquiry Message</label>
        <textarea id="" cols="30" rows="10" name="message"></textarea>
        @error('message')
        <div class="error-message-container">
            <p class="error-message">{{ $message }}</p>
        </div>
         @enderror
    </div>
    
    <div class="flex flex-fd-c gap-1">
        <button class="submit">Send</button>
    </div>
    
    {{ $status ?? '' }}
    </form>    
</div>






</section>
@endsection
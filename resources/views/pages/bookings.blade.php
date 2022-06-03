@extends('layouts.app')


@section('content')



<div class="social flex flex-jc-sb flex-fw-w w-100 gap-4 flex-jc-c">

    <section class="m-t-3 container m-b-2" id="booking">

        <h2>Booking Enquiry</h2>
        <div class="social flex flex-jc-c flex-fw-w w-100">
         
            <form action="{{ route('addBooking') }}" method="POST" class="contact-form flex flex-jc-c flex-fd-c flex-fs-1 mw-100">
            
                <div class="flex flex-fw-w gap-1">
                    <div class="flex flex-fd-c flex-fg-1 gap-1">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" class="p-1">
                        @error('first_name')
                        <div class="error-message-container">
                            <p class="error-message">{{ $message }}</p>
                        </div>
                         @enderror
                    </div>
                    <div class="flex flex-fd-c flex-fg-1 gap-1">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" class="p-1">
                        @error('last_name')
                        <div class="error-message-container">
                            <p class="error-message">{{ $message }}</p>
                        </div>
                         @enderror
                    </div>
                
                </div>
            
            
            <div class="flex flex-fd-c gap-1">
                <label for="">Your Email</label>
                <input type="email" class="p-1">
                @error('email')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
                 @enderror
            </div>
            
            <div class="flex flex-fd-c gap-1">
                <label for="">Interested in the property:</label>
                <input type="text" name="property_name" value="" class="p-1" readonly>
                @error('property_name')
                    <div class="error-message-container">
                        <p class="error-message">{{ $message }}</p>
                    </div>
                     @enderror
            </div>
    
            <div class="flex flex-fw-w gap-1">
                <div class="flex flex-fd-c gap-1 flex-fg-1">
                    <label for="">Preferred date from:</label>
                    <input type="date" name="date_from" value="" class="p-1" >
                    @error('date_from')
                    <div class="error-message-container">
                        <p class="error-message">{{ $message }}</p>
                    </div>
                     @enderror
                </div>
                <div class="flex flex-fd-c flex-fg-1 gap-1">
                    <label for="">Preferred date to:</label>
                    <input type="date" name="date_to" value="" class="p-1" >
                    @error('date_to')
                    <div class="error-message-container">
                        <p class="error-message">{{ $message }}</p>
                    </div>
                     @enderror
                </div>
            </div>
           
            <div class="flex flex-fd-c gap-1">
                <label for="">Message</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
                @error('message')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
                 @enderror
            </div>
            
            <div class="flex flex-fd-c gap-1">
    
            </div>
            
            <button type="submit" class="submit">Send</button>
            </form>    
        </div>
        
        
        
        
        
    </section>
@endsection
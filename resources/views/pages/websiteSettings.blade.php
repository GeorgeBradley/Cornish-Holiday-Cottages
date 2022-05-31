@extends('layouts.app')
@section('content')

<div class="full-screen-container">
  


   
    <div class="website-settings-form-container ">
        <h3 class="form-title">Website Settings</h3>
    <form action="{{ route('login') }}" class="website-settings-form" method="POST">
        @csrf
        <div class="form-body flex flex-fd-c gap-2 p-1">
           
            @if (session('status'))
            <div class="error-message-container ta-c">
                <p class="error-message">
                    {{  session('status')  }}
                </p>
               
            </div>
           
            @endif
            <div class="form-controls flex flex-fd-c">
                <label for="">Website Name</label>
                
                <input type="text" value="{{ $website_info->website_name}}"  name="websiteName" class="@error('email') red-border  @enderror" placeholder="">
    
                @error('websiteName')
               
                    <div class="error-message-container">
                        <p class="error-message">
                            {{ $message }}
                        </p>
                       
                    </div>
 
                @enderror
                
            </div>
            <div class="form-controls flex flex-fd-c">
                <label for="">Website Logo</label>
                <input type="file" name="password" placeholder="" class="@error('website_logo') red-border  @enderror">
                @error('website_logo')
               
                <div class="error-message-container">
                    <p class="error-message">
                        {{ $message }}
                    </p>
                   
                </div>
               
         
        
            @enderror
            </div>
       <div class="form-controls flex flex-fd-c">
                <label for="">Page Title</label>
                <input type="text" name="password" value="{{ $website_info->page_title}}"placeholder="" class="@error('page_title') red-border  @enderror">
                @error('website_logo')
               
                <div class="error-message-container">
                    <p class="error-message">
                        {{ $message }}
                    </p>
                   
                </div>
               
         
        
            @enderror
            </div>
           
       

        <div class="form-controls flex flex-fd-c">
            <label for="">Tagline</label>
            <input type="text" value="{{ $website_info->tagline}}" name="tagline" placeholder="" class="@error('page_title') red-border  @enderror">
            @error('website_logo')
           
            <div class="error-message-container">
                <p class="error-message">
                    {{ $message }}
                </p>
               
            </div>
           
     
    
        @enderror
        </div>
        <div class="form-controls flex flex-fd-c">
            <label for="">Admin Email Address</label>
            <input type="email" value="{{ $website_info->admin_email_address}}" name="admin_email_address" placeholder="" class="@error('admin_email_address') red-border  @enderror">
            @error('admin_email_address')
           
            <div class="error-message-container">
                <p class="error-message">
                    {{ $message }}
                </p>
               
            </div>
           
     
    
        @enderror
        </div>
        <button type="submit" class="button">Update Website Settings</button>
    </div>
</div>
    </div>
   
    </form>
</div>
        
</div>

@endsection
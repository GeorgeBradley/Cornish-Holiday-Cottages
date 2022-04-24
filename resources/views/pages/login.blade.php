@extends('layouts.app')
@section('content')

<div class="full-screen-container">
  


    @if (session('status'))
    {{  session('status')  }}
    @endif
    <div class="login-form-container">
        <h3 class="form-title">Admin Login</h3>
    <form action="{{ route('login') }}" class="" method="POST">

        @csrf
        
     
     
   
        <div class="form-body">
            <div class="icon-container">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form-controls flex flex-fd-c">
                <label for="">Email</label>
                <input type="text" class="" name="email" placeholder="">
    
                @error('email')
               
                    <div class="error-message-container">
                        <p class="error-message">
                            {{ $message }}
                        </p>
                       
                    </div>
                   
             
            
                @enderror
            </div>
            <div class="form-controls flex flex-fd-c">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="">
                @error('password')
               
                <div class="error-message-container">
                    <p class="error-message">
                        {{ $message }}
                    </p>
                   
                </div>
               
         
        
            @enderror
            </div>
    
            <button type="submit" class="login-button">Login</button>
        </div>
   
    </form>
</div>
        
</div>

@endsection
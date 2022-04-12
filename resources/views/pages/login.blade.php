@extends('layouts.app')
@section('content')

<div class="full-screen-container">
   <div class="login-form-container">


    @if (session('status'))
    {{  session('status')  }}
    @endif
    <form action="{{ route('login') }}" class="" method="POST">

        @csrf
        <h3 class="form-title">Admin Login</h3>

        <div class="form-controls flex flex-fd-c">
            <label for="">Email</label>
            <input type="text" class="" name="email">

            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="form-controls flex flex-fd-c">
            <label for="">Password</label>
            <input type="password" name="password">

        </div>

        <button type="submit" class="login-button">Login</button>
    </form>
</div> 
</div>

@endsection
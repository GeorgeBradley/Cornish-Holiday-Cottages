@extends('layouts.app')
@section('content')

<div class="container">

    <form class="login-form flex flex-fd-c flex-jc-c flex-ai-c gap-5">

        <div class="form-controls flex flex-fd-c">
            <label for="">Email</label>
            <input type="text" class="">

        </div>
        <div class="form-controls flex flex-fd-c">
            <label for="">Password</label>
            <input type="password">

        </div>

        <button type="submit" class="">Login</button>
    </form>
</div>
@endsection
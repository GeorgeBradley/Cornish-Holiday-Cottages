@extends('layouts.app')


@section('content')

<section class="m-t-3 container m-b-2">

<div class="social flex flex-jc-sb flex-fw-w w-100 gap-4 flex-jc-c">

    <form action="" class="contact-form flex flex-jc-c flex-fd-c flex-fs-1 mw-100">
    
        <div class="flex flex-fw-w gap-1">
            <div class="flex flex-fd-c flex-fg-1 gap-1">
                <label for="">First Name</label>
                <input type="text">
            </div>
            <div class="flex flex-fd-c flex-fg-1 gap-1">
                <label for="">Last Name</label>
                <input type="text">
            </div>
        </div>
    
    
    <div class="flex flex-fd-c gap-1">
        <label for="">Your Email</label>
        <input type="email">
    </div>
    
    <div class="flex flex-fd-c gap-1">
        <label for="">Enquiry Title</label>
        <input type="text">
    
    </div>
    <div class="flex flex-fd-c gap-1">
        <label for="">Message</label>
        <input type="">
    </div>
    <div class="flex flex-fd-c gap-1">
        <label for="">Message</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>
    
    <div class="flex flex-fd-c gap-1">
        <button class="submit">Send</button>
    </div>
    
    
    </form>    
</div>






</section>
@endsection
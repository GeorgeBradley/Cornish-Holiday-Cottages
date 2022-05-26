@extends('layouts.app')


@section('content')

<section class="m-t-3 container m-b-2">

<div class="social flex flex-jc-c flex-fw-w">
<div class="flex">

    <div class="flex flex-fd-c">
        <h3>Find us</h3>
        <span class="fa-brands fa-facebook"></span>
        <span class="fa-brands fa-twitter"></span>
    </div>

</div>

    <form action="" class="contact-form flex flex-jc-c flex-fd-c flex-fs-1">
    
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
        <label for="">Enquiry Message</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>
    
    <div class="flex flex-fd-c gap-1">
        <button class="submit">Send</button>
    </div>
    
    
    </form>    
</div>






</section>
@endsection
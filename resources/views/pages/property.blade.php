@extends('layouts.app')
@section('content')
<nav class="property-details-nav bs-1">

    <div class="container">
        <ul class="nav-items flex flex-jc-se  p-1 flex-ai-c">

            <li><a href="/properties.html" class="btn">Back</a></li>
            <li><a href="#overview" class="property-details-nav-item">Overview</a></li>
            <li><a href="#testimonials" class="property-details-nav-item">Reviews</a></li>
            <li><a href="#images" class="property-details-nav-item">Photos</a></li>
            <li><a href=""class="property-details-nav-item">Location</a></li>
    
    
        </ul>
    
    </div>
   

</nav>

<section class="overview m-t-3 m-b-3" id="overview">
    <div class="container">
        <h1 class="ta-c m-b-2">{{ $property->property_title }}</h1>
        <div class="content grid grid-col-1 grid-lg-col-2 gap-2">
    
            <div class="bs-1 p-1">
                <h2 class="m-b-1">Description</h2>
                {{ $property->about_info }}
            </div>
        
            <div class="">
                <img src="{{ asset('images/property-thumbnails/' . $property->image_path) }}" class="property-thumbnail-image" alt="">
            </div>
        </div>

    </div>
   
</section>


<section class="property-images m-t-3 m-b-3" id="images">
    <h1 class="ta-c m-b-2">Photos</h1>
    <div class="container">

<div class="gallery">
    @foreach ($property->propertyImages as $image)
    <div class="gallery-item">
        <img class="gallery-image" src="{{asset('images/property-gallery-images/' . $image->image_path) }}" alt="">
    </div>
    @endforeach
</div>
    </div>
</section>

<section>
    
<section class="testimonials m-t-3 m-b-3 container">

    <div class="">
        <h1 class="section-title ta-c">Testimonials</h1>
        <button>Add New Testimonial</button>
    </div>
      
        <div class="testimonial-cards grid gap-5 grid-col-1 grid-sm-col-2 grid-md-col-2 grid-lg-col-3">
            <div class="testimonial-card flex flex-jc-c flex-ai-c flex-fd-c p-1 bs-1 gap-1">
               
               
                <div class="img-container">
                    <img src="images/testimonials/pexels-photo-762020.jpeg" alt="" class="profile-pic bs-2">
                </div>
                <h1 class="name">Sarah Clark</h1>
           
        
    
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
            </div>
            
            <blockquote class="ta-c">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia incidunt corrupti ducimus
                consequatur saepe fuga suscipit, voluptatibus debitis rerum vel.</blockquote>
        </div>
    
</section>
@endsection
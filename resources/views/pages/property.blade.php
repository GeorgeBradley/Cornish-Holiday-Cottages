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

<section class="m-t-3 container m-b-2">

    <h2>Booking Enquiry</h2>
    <div class="social flex flex-jc-c flex-fw-w w-100">
     
        <form action="" class="contact-form flex flex-jc-c flex-fd-c flex-fs-1 mw-100">
        
            <div class="flex flex-fw-w gap-1">
                <div class="flex flex-fd-c flex-fg-1 gap-1">
                    <label for="">First Name</label>
                    <input type="text" class="p-1">
                </div>
                <div class="flex flex-fd-c flex-fg-1 gap-1">
                    <label for="">Last Name</label>
                    <input type="text" class="p-1">
                </div>
            </div>
        
        
        <div class="flex flex-fd-c gap-1">
            <label for="">Your Email</label>
            <input type="email" class="p-1">
        </div>
        
        <div class="flex flex-fd-c gap-1">
            <label for="">Interested in the property:</label>
            <input type="text" value="{{$property->property_title   }}" class="p-1" readonly>
        
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
        <button class="add-new-property-btn flex flex-jc-c flex-ai-c gap-1">Add New Testimonial</button>
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
<section class="properties m-t-3 container m-b-2">
    <h1 class="ta-c m-b-2">Recommended Properties</h1>
<div class="grid grid-col-1 grid-sm-col-1 grid-md-col-2 grid-lg-col-3 grid-xl-col-4 gap-4">
       
    @foreach ($recommendedProperties as $recommendedProperty)

    
    <div class="property flex-js-c flex-as-c gap-3 bs-1 p-1">
       
        @auth
        <div class="edit flex gap-1 flex-jc-e w-100">
            <a href="" class="tooltip"><span class="tooltiptext">Edit</span><span class="fa-solid fa-pen-to-square success-color"></span></a>
            <a href="" class="tooltip"><span class="tooltiptext">Delete</span><span class="fa-solid fa-trash danger-color"></span></a>
        </div>
        @endauth
        
        <div class="property-img-container">
        <img src="{{asset('images/property-thumbnails/' . $recommendedProperty->image_path) }}" alt="" class="">
        </div>
        <div class="property-info">

            <h2>{{ $recommendedProperty->property_title }}</h2>
            <p>{{ $recommendedProperty->location }}</strong></p>
            <ul class="flex gap-1">
                <li class="flex gap-1 tooltip"><span class="tooltiptext">Number of Sleeps</span><span class="fa-solid fa-bed"></span>{{ $recommendedProperty->number_of_sleeps }}</li>
                <li class="flex gap-1 tooltip"><span class="tooltiptext">Number of Bedrooms</span> <span class="fa-solid fa-moon"></span> {{ $recommendedProperty->number_of_bedrooms }}</li>
                <li class="flex gap-1 tooltip"><span class="tooltiptext">Number of Bathrooms</span> <span class="fa-solid fa-shower"></span>{{ $recommendedProperty->number_of_bathrooms }}</li>
                <li class="flex gap-1 tooltip"><span class="tooltiptext">Are pets allowed?</span><span class="fa-solid fa-paw"></span>{{ $recommendedProperty->allow_pets ? ' Yes' : 'No' }}</li>
            </ul>
        </div>
        <div class="price-box flex flex-fd-c flex-sb-c gap-1">
            <p>Price from</p>
            <h4 class="price">£{{ number_format($recommendedProperty->cost) }}</h4>

            <a href="{{ route('property', $recommendedProperty->id) }}" class="btn flex flex-jc-c flex-ai-c">View</a>
        </div>            
    </div>
  
    @endforeach
   
</div>
</section>

@endsection
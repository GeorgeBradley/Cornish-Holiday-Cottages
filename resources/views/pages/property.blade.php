@extends('layouts.app')
@section('content')
<nav class="property-details-nav bs-1">

    <div class="container">
        <ul class="nav-items flex flex-jc-se p-1 flex-ai-c flex-fw-w">

          
            <li><a href="#overview" class="property-details-nav-item">Property & Local Area</a></li>
            <li><a href="#booking" class="property-details-nav-item">Booking</a></li>
            <li><a href="#images" class="property-details-nav-item">Accommodation / Gallery</a></li>
            <li><a href="#testimonials" class="property-details-nav-item">Property reviews</a></li>
        </ul>
    
    </div>
   

</nav>




<section class="overview m-t-3 m-b-3" id="overview">
    <div class="container">
        <div class="back-div flex flex-jc-c">
            <a href="/properties" class="back">Back</a>
        </div>
  
        <h1 class="ta-c m-b-2">{{ $property->property_title }}</h1>
        <div class="content grid grid-col-1 grid-lg-col-2 gap-2">
    
            <div class="bs-1 p-1">
                <h2 class="m-b-1">Description</h2>
                <p>
                    {{ $property->about_info }}</p>
            </div>
        

            <div class="">
                <img src="{{ asset('images/property-thumbnails/' . $property->image_path) }}" class="property-thumbnail-image" alt="An image">
            </div>
        </div>
        <div class="content grid grid-col-1 grid-lg-col-2 gap-2">
            <ul class="flex flex-fd-r gap-3 m-t-1">

                <li class="flex gap-1 tooltip"><span class="tooltiptext">Number of Sleeps</span><span class="fa-solid fa-bed"></span>{{ $property->number_of_sleeps }}</li>
                    <li class="flex gap-1 tooltip"><span class="tooltiptext">Number of Bedrooms</span> <span class="fa-solid fa-moon"></span> {{ $property->number_of_bedrooms }}</li>
                    <li class="flex gap-1 tooltip"><span class="tooltiptext">Number of Bathrooms</span> <span class="fa-solid fa-shower"></span>{{ $property->number_of_bathrooms }}</li>
                    <li class="flex gap-1 tooltip"><span class="tooltiptext">Are pets allowed?</span><span class="fa-solid fa-paw"></span>{{ $property->allow_pets ? ' Yes' : 'No' }}</li>
            </ul>

        </div>
    </div>
   
</section>


<section class="m-t-3 container m-b-2" id="booking">

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

        <div class="flex flex-fw-w gap-1">
            <div class="flex flex-fd-c gap-1 flex-fg-1">
                <label for="">Preferred date from:</label>
                <input type="date" name="date_from" value="" class="p-1" >
            
            </div>
            <div class="flex flex-fd-c flex-fg-1 gap-1">
                <label for="">Preferred date to:</label>
                <input type="date" name="date_to" value="" class="p-1" >
            
            </div>
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
<section class="property-images m-t-3 m-b-3" id="images">
    <h1 class="ta-c m-b-2">Gallery / Media</h1>
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
    
<section class="testimonials m-t-3 m-b-3 container" id="testimonials">

    <div class="">
        <h1 class="section-title ta-c">Property reviews</h1>
        <button class="add-new-property-btn flex flex-jc-c flex-ai-c gap-1">Add New Testimonial</button>
    </div>
      
        <div class="testimonial-cards flex flex-fw-w flex-jc-c gap-3">
            <div class="testimonial-card flex flex-jc-c flex-ai-c flex-fd-c p-1 bs-1 gap-1">
            
                <div class="img-container">
                    <img src="{{asset('images/testimonials/man1.jpeg')  }}" alt="" class="profile-pic bs-2">
                </div>
                <h1 class="name">Sarah Doe</h1>
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
            <div class="testimonial-card flex flex-jc-c flex-ai-c flex-fd-c p-1 bs-1 gap-1">
            
                <div class="img-container">
                    <img src="{{asset('images/testimonials/man2.jpeg')  }}" alt="" class="profile-pic bs-2">
                </div>
                <h1 class="name">Andy Bell</h1>
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
            <div class="testimonial-card flex flex-jc-c flex-ai-c flex-fd-c p-1 bs-1 gap-1">
            
                <div class="img-container">
                    <img src="{{asset('images/testimonials/man3.jpeg')  }}" alt="" class="profile-pic bs-2">
                </div>
                <h1 class="name">John Smith</h1>
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
<div class="flex flex-fw-w gap-3 flex-jc-c">
       
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
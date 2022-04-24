@extends('layouts.app')


{{-- @foreach ($cars as $car)
    {{ $car->name}}
@endforeach --}}
@section('content')
<section class="hero">

    <div class="hero-banner">
        <div class="carousel">
            <input type="radio" id="carousel-1" name="carousel[]" checked>
            <input type="radio" id="carousel-2" name="carousel[]">
            <input type="radio" id="carousel-3" name="carousel[]">
            <input type="radio" id="carousel-4" name="carousel[]">
            <input type="radio" id="carousel-5" name="carousel[]">
            <ul class="carousel-items  carousel-items-w-md vh-50 vh-30-sm vh-40-md">

                <li class="carousel-item flex flex-jc-c flex-ai-c">

                    <div class="img-caption">
                        <h1 class="fs-5 fs-7-lg">Cornwall Holiday Cottages</h1>
                        <p class="">Your next adventure begins here.</p>
                        <!-- <button class="btn">Start your search</button> -->
                        <button class="btn m-t-1">Learn More</button>
                    </div>
                    <img src="{{ asset('/images/cottages/cottage6.jpeg') }}" alt="" class="img-overlay">
                </li>
                <li class="carousel-item">
                    <img src="{{ asset('images/testimonials/cottage-dark.jpeg') }}" alt="">
                </li>
                    <li class="carousel-item">
                    <img src="{{ asset('images/cottages/cottage1.jpeg') }}" alt="">
                </li>
                <li class="carousel-item">
                    <img src="{{ asset('images/cottages/cottage4.jpeg') }}" alt="">
                </li>
                <li class="carousel-item">
                    <img src="{{ asset('images/cottages/cottage4.jpeg') }}" alt="">
                </li>
  
            </ul>
            <div class="carousel-prev">
                <label for="carousel-1"></label>
                <label for="carousel-2"></label>
                <label for="carousel-3"></label>
                <label for="carousel-4"></label>
                <label for="carousel-5"></label>
            </div>
            <div class="carousel-next">
                <label for="carousel-1"></label>
                <label for="carousel-2"></label>
                <label for="carousel-3"></label>
                <label for="carousel-4"></label>
                <label for="carousel-5"></label>
            </div>
            <div class="carousel-nav">
                <label for="carousel-1"></label>
                <label for="carousel-2"></label>
                <label for="carousel-3"></label>
                <label for="carousel-4"></label>
                <label for="carousel-5"></label>
            </div>
        </div>
    </div>


</section>
<section class="sign-up bg-light p-1">
    <div class="container ta-c flex-fd-c flex flex-ai-c">
        <h3 class="m-b-1">Sign up to receive our latest news & offers</h3>
        <form action="" class="flex flex-fd-c-md flex-jc-c gap-1" style="width:100%;">

            <div>
                <input type="text" class="p-1 bs-2" placeholder="First Name">
            </div>

            <div>
                <input type="text" class="p-1 bs-2" placeholder="Last Name">
            </div>

            <div>
                <input type="email" class="p-1 bs-2" placeholder="Email">
            </div>

            <div>
                <button class="btn-2 btn-2-sign-up">Sign Up</button>
            </div>




        </form>
    </div>
</section>

<section class="hero container">


    <h3 class="section-title m-b-1 m-t-1 ta-c">Landmarks</h3>
    <div class="flex flex-fw-w gap-2  ">
        <div class="hero-img-item flex flex-jc-c flex-ai-c">
            <h1 class="hero-img-caption">A fresh breeze</h1>
            <img src="{{asset('images/cottages/beach.jpeg')}}" alt="" class="img-overlay">
        </div>
        <div class="hero-img-item flex flex-jc-c flex-ai-c">
            <h1 class="hero-img-caption">Story time</h1>
            <img src="{{asset('images/cottages/cottage-night-time.jpeg')  }}" alt="" class="img-overlay">
        </div>
        <div class="hero-img-item flex flex-jc-c flex-ai-c">
            <h1 class="hero-img-caption">Sail away</h1>
            <img src="{{ asset('images/cottages/dock.jpeg') }}" alt="" class="img-overlay">
        </div>
        <div class="hero-img-item flex flex-jc-c flex-ai-c">
            <h1 class="hero-img-caption">Enchanting sunsets</h1>
            <img src="{{ asset('images/cottages/pexels-photo-4687530.jpeg') }}" alt="" class="img-overlay">
        </div>
        <div class="hero-img-item flex flex-jc-c flex-ai-c">
            <h1 class="hero-img-caption">Cottages</h1>
            <img src="{{ asset('images/cottages/cottage6.jpeg') }}" alt="" class="img-overlay">
        </div>
    </div>
</section>


<!-- <div class="hero-boxes">
            <div class="hero-img-item flex flex-jc-c flex-ai-c">
                <h1 class="hero-img-caption">Bed and Breakfast</h1>
                <img src="images/pexels-pixabay-53435.jpg" alt="" class="img-overlay">
            </div>
            
            <div class="hero-img-item flex flex-jc-c flex-ai-c">
                <h1 class="hero-img-caption">Bed and Breakfast</h1>
                <img src="images/pexels-photo-6735111.jpeg" alt="" class="img-overlay">
            </div>
            
            <div class="hero-img-item flex flex-jc-c flex-ai-c">
                <h1 class="hero-img-caption">Bed and Breakfast</h1>
                <img src="images/pexels-photo-4687530.jpeg" alt="" class="img-overlay">
            </div>
            <div class="hero-img-item flex flex-jc-c flex-ai-c">
                <h1 class="hero-img-caption">Bed and Breakfast</h1>
                <img src="images/pexels-photo-5538798.jpeg" alt="" class="img-overlay">
            </div>
            <div class="hero-img-item flex flex-jc-c flex-ai-c">
                <h1 class="hero-img-caption">Bed and Breakfast</h1>
                <img src="images/dock.jpeg" alt="" class="img-overlay">
            </div>
            <div class="hero-img-item flex flex-jc-c flex-ai-c">
                <h1 class="hero-img-caption">Bed and Breakfast</h1>
                <img src="images/cottage-night-time.jpeg" alt="" class="img-overlay">
            </div>
            
            
            
        </div> -->



<section class="about container m-t-1">
    <h3 class="section-title ta-c">About</h3>
    <div class="content grid grid-col-1 grid-lg-col-2 gap-2">


        <div class="about-text ta-c-md">

            <p class="ta-">Holiday cottages
                For over 30 years, holidaycottages.co.uk has been providing a first-class service to our guests;
                just
                look at our customer reviews. We help people find their perfect cottage in popular holiday
                destinations
                from Scotland to Wales, Cornwall to the Lake District and across the whole of the UK. Whether you're
                looking for a dog-friendly cottage by the sea, farmhouse on the moors or apartment in the city, we
                have
                something to suit all requirements and budgets.</p>


        </div>
        <div class="about-image">
            <img src="{{ asset('images/cottages/cottage2.jpeg') }}" alt="">
        </div>

    </div>




</section>



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

    <div class="testimonial-card flex flex-jc-c flex-ai-c flex-fd-c p-1 bs-1 gap-1">
           
           
        <div class="img-container">
            <img src="images/testimonials/man1.jpeg" alt="" class="profile-pic bs-2">
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

<div class="testimonial-card flex flex-jc-c flex-ai-c flex-fd-c p-1 bs-1 gap-1">
           
           
    <div class="img-container">
        <img src="images/testimonials/man3.jpeg" alt="" class="profile-pic bs-2">
    </div>
    <h1 class="name">Kevin Jenkins</h1>



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
    <img src="images/testimonials/woman1.jpeg" alt="" class="profile-pic bs-2">
</div>
<h1 class="name">Sue Keown</h1>



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
    <img src="images/testimonials/pexels-photo-532220.jpeg" alt="" class="profile-pic bs-2">
</div>
<h1 class="name">Beth Adams</h1>



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
    <img src="images/testimonials/man2.jpeg" alt="" class="profile-pic bs-2">
</div>
<h1 class="name">Andy Pierce</h1>



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

    </div>

</section>

<section class="back-to-top bg-light p-1 flex flex-jc-c flex-ai-c">
    <a href="" class="">
        Back to top <i class="fas fa-chevron-up m-l-1"></i>
    </a>
</section>

@endsection

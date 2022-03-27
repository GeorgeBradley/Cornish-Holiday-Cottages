@extends('layouts.app')
@section('content')
<nav class="property-details-nav">

    <ul class="nav-items flex flex-jc-se bs-1 p-2">

        <li><a href="/properties.html" class="btn">Back</a></li>
        <li><a href="#overview" class="property-details-nav-item">Overview</a></li>
        <li><a href="#testimonials" class="property-details-nav-item">Reviews</a></li>
        <li><a href="#images" class="property-details-nav-item">Photos</a></li>
        <li><a href=""class="property-details-nav-item">Location</a></li>


    </ul>


</nav>

<section class="overview m-t-3 m-b-3" id="overview">
    <h1 class="ta-c m-b-2">{{ $property->property_title }}</h1>

    <div class="container bs-1 p-1">

 
            <p>Offering everything you could ask for in a holiday, Newquay is packed with activities, facilities and
                attractions to keep you busy during a break away. A selection of pubs, shops, clubs, and a cinema await,
                alongside renowned attractions such as Newquay Zoo and Blue Reef Aquarium, and beautiful beaches like
                Fistral, Crantock and Towan. Enjoy a stroll along the South West Coast Path, explore the Gannel Estuary,
                or venture out in the car slightly further afield to explore the likes of Watergate Bay, Padstow, the
                Lost Gardens of Heligan, and the Eden Project. Enter the communal entrance and into a bright, airy lobby
                area. Make your way up the stairs to the top floor where you will find the entrance to the apartment.

            </p> 
    

           <p> Two private balconies and terrace areas, one accessed from the living room and the other from the
            bedroom, both via patio doors and complete with furniture. Private permit parking for one car.</p>


    </div>

</section>


<section class="property-images m-t-3 m-b-3" id="images">
    <h1 class="ta-c m-b-2">Photos</h1>
    <div class="container">

<div class="gallery">
    @foreach ($property->propertyImages as $image)
    <div class="gallery-item">
        <img class="gallery-image" src="{{ asset($image->image_path) }}" alt="">
    </div>
    @endforeach
</div>
    </div>
</section>

@endsection
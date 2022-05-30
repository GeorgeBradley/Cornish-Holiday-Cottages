@extends('layouts.app')


@section('content')
<section class="properties m-t-3 container m-b-2">
    <div class="flex flex-jc-sb flex-ai-c">
        <h1 class="ta-c m-b-1">Properties</h1>
        @auth
        <a href="{{ route('add-new-property-form') }}" class="add-new-property-btn flex flex-jc-c flex-ai-c gap-1"><span class="fa-solid fa-plus"></span>Add new Property</a>

        @endauth
    </div>

    <div class="grid grid-col-1 grid-sm-col-1 grid-md-col-2 grid-lg-col-3 grid-xl-col-4 gap-4">
       
        @foreach ($properties as $property)

        
        <div class="property flex-js-c flex-as-c gap-3 bs-1 p-1">
           
            @auth
            <div class="edit flex gap-1 flex-jc-e w-100">
                <a href="" class="tooltip"><span class="tooltiptext">Edit</span><span class="fa-solid fa-pen-to-square success-color"></span></a>
                <a href="" class="tooltip"><span class="tooltiptext">Delete</span><span class="fa-solid fa-trash danger-color"></span></a>
            </div>
            @endauth
            
            <div class="property-img-container">
            <img src="{{asset('images/property-thumbnails/' . $property->image_path) }}" alt="An property image">
            </div>
            <div class="property-info">

                <h2>{{ $property->property_title }}</h2>
                <p>{{ $property->location }}</strong></p>
                <ul class="flex gap-1">
                    <li class="flex gap-1 tooltip"><span class="tooltiptext">Number of Sleeps</span><span class="fa-solid fa-bed"></span>{{ $property->number_of_sleeps }}</li>
                    <li class="flex gap-1 tooltip"><span class="tooltiptext">Number of Bedrooms</span> <span class="fa-solid fa-moon"></span> {{ $property->number_of_bedrooms }}</li>
                    <li class="flex gap-1 tooltip"><span class="tooltiptext">Number of Bathrooms</span> <span class="fa-solid fa-shower"></span>{{ $property->number_of_bathrooms }}</li>
                    <li class="flex gap-1 tooltip"><span class="tooltiptext">Are pets allowed?</span><span class="fa-solid fa-paw"></span>{{ $property->allow_pets ? ' Yes' : 'No' }}</li>
                </ul>
            </div>
            <div class="price-box flex flex-fd-c flex-sb-c gap-1">
                <p>Price from</p>
                <h4 class="price">£{{ number_format($property->cost) }}</h4>

                <a href="{{ route('property', $property->id) }}" class="btn flex flex-jc-c flex-ai-c">View</a>
            </div>            
        </div>
      
        @endforeach
       
    </div>

    {{ $properties->links() }}
</section>



@endsection
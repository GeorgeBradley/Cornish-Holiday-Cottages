@extends('layouts.app')


@section('content')
<section class="properties m-t-3 container m-b-2">
    <div class="flex flex-jc-sb flex-ai-c">
        <h1 class="ta-c m-b-1">Properties</h1>
        <a href="{{ route('add-new-property-form') }}" class=" ">Add new Property</a>
    </div>

    <div class="grid grid-col-1 grid-sm-col-1 grid-md-col-2 grid-lg-col-3 grid-xl-col-4 gap-4">
       
        @foreach ($properties as $property)

        
        <div class="property flex-js-c flex-as-c gap-3 bs-1 p-1">
            <div class="edit">
                <a href="">Edit</a>
                <a href="">Delete</a>
            </div>
            <div class="property-img-container">
            <img src="{{asset('images/property-thumbnails/' . $property->image_path) }}" alt="" class="">
            </div>
            <div class="property-info">

                <h2>{{ $property->property_name }}</h2>
                <p>{{ $property->location }}</strong></p>
                <ul class="">
                    <li>Sleeps: {{ $property->number_of_sleeps }}</li>
                    <li>Bedrooms: {{ $property->number_of_bedrooms }}</li>
                    <li>Bathrooms: {{ $property->number_of_bathrooms }}</li>
                    <li>Pets allowed?{{ $property->allow_pets ? ' Yes' : 'No' }}</li>
                </ul>
            </div>
            <div class="price-box flex flex-fd-c flex-sb-c gap-1">
                <p>Price from</p>
                <h4 class="price">£{{ number_format($property->cost) }}</h4>

                <a href="/property-details.html" class="btn flex-as-fs">View</a>
            </div>            
        </div>
      
        @endforeach
       
    </div>
    {{ $properties->links() }}
</section>



@endsection
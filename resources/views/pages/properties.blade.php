@extends('layouts.app')


@section('content')
<section class="properties m-t-3 container m-b-2">
    <h1 class="ta-c m-b-1">Properties</h1>
    <div class="grid grid-col-1 grid-sm-col-1 grid-md-col-2 grid-lg-col-3 grid-xl-col-4 gap-4">
       
        @foreach ($properties as $property)
        <div class="property flex-js-c flex-as-c gap-3 bs-1 p-1">
            <div class="property-img-container">
            <img src="{{ asset($property->imagePath) }}" alt="" class="">
            </div>
            <div class="property-info">

                <h2>{{ $property->propertyName }}</h2>
                <p>{{ $property->location }}</strong></p>
                <ul class="">
                    <li>Sleeps: {{ $property->numberOfSleeps }}</li>
                    <li>Bedrooms: {{ $property->numberOfBedrooms }}</li>
                    <li>Bathrooms: {{ $property->numberOfBathrooms }}</li>
                    <li>Pets allowed?{{ $property->allowPets ? ' Yes' : 'No' }}</li>
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
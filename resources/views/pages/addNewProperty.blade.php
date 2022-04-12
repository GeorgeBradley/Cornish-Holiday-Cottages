@extends('layouts.app')
@section('content')

<div class="container m-t-2">
    <form action="{{ route('addNewProperty') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3 class="ta-c">Add new property</h3>
        <div class="add-new-property-form">
            <div class="form-control">
                <label for="">Property Name</label>
                <input type="text" name="property_name" class="@error('property_name') red-border  @enderror" value="{{ old('property_name') }}">
                @error('property_name')
                    <div class="p">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-control">
                <label for="">Location</label>
                <input type="text" name="location_name" class="@error('location_name') red-border  @enderror" value="{{ old('location_name') }}">

                @error('location_name')
                <div class="p">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-control">
                <label for="">Cost</label>
                <input type="text" name="cost" class="@error('cost') red-border  @enderror" value="{{ old('cost') }}">
                @error('cost')
                <div class="p">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-control">
                <label for="">Number of Sleeps:</label>
                <input type="number" value="1" min="1" max="20" name="number_of_sleeps">
                @error('number_of_sleeps')
                <div class="p">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-control">
                <label for="">Number of Bathrooms:</label>
                <input type="number" value="1" min="1" max="20" name="number_of_bathrooms">
            </div>
            <div class="form-control">
                <label for="">Number of Bedrooms:</label>
                <input type="number" value="1" min="1" max="20" name="number_of_bedrooms">
            </div>
            <div class="form-control">
                <label for="">Are pets allowed?</label>
                <input type="checkbox" name="are_pets_allowed">
            </div>
            <div class="form-control">
                <label for="">Upload Property Thumbnail</label>
                <input type="file" name="property_thumbnail_path">
            </div>
            <button class="submit">Submit</button>

        </div>
        
    </form>
</div>


@endsection
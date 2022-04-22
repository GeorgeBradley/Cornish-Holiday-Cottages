@extends('layouts.app')
@section('content')

<div class="container m-t-2">
    <form action="{{ route('addNewProperty') }}" method="POST" enctype="multipart/form-data" id="addNewPropertyForm">
        @csrf
        <h3 class="ta-c">Add new property</h3>
        <div class="add-new-property-form flex flex-fd-c">
            <div class="form-control flex flex-fd-c">
                <label for="">Property Name</label>
                <input type="text" name="property_name" class="@error('property_name') red-border  @enderror" value="{{ old('property_name') }}">
                @error('property_name')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
                @enderror
            </div>

            <div class="form-control flex flex-fd-c">
                <label for="">Location</label>
                <input type="text" name="location_name" class="@error('location_name') red-border  @enderror" value="{{ old('location_name') }}">

                @error('location_name')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
            @enderror
            </div>
            <div class="form-control flex flex-fd-c">
                <label for="">About</label>
                <textarea type="textarea" name="about_info" rows="10" class="@error('about_info') red-border  @enderror" value="{{ old('about_info') }}" >{{ old('about_info') }}</textarea>

                @error('about_info')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
            @enderror
            </div>
            <div class="form-control">
                <label for="">Cost per night: £</label>
                <input type="text" name="cost" class="@error('cost') red-border  @enderror" value="{{ old('cost') }}">
                @error('cost')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
            @enderror
            </div>
            <div class="form-control">
                <label for="">Number of Sleeps:</label>
                <input type="number" value="{{ old('cost') }}" min="1" max="20" name="number_of_sleeps">
                @error('number_of_sleeps')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
            @enderror
            </div>
            <div class="form-control">
                <label for="">Number of Bathrooms:</label>
                <input type="number" value="1" min="1" max="20" name="number_of_bathrooms">
            </div>
            <div class="form-control">
                <label for="">Number of Bedrooms:</label>
                <input type="number" value="{{ old('number_of_bedrooms') }}" min="1" max="20" name="number_of_bedrooms">
                @error('number_of_bedrooms')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
                @enderror
            </div>
            <div class="form-control">
                <label for="">Are pets allowed?</label>
                <input type="checkbox" name="are_pets_allowed">
                
            </div>
            <div class="form-control">
                <label for="">Upload Property Thumbnail</label>
                <input type="file" name="property_thumbnail_path" onchange="readURL(this) ">
                @error('property_thumbnail_path')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
            @enderror
            </div>
            <div class="hidden image-thumbnail-preview">
                <img id="property-thumbnail-preview" src="" alt="">
            </div>

            <div class="form-control">
                <label for="">Upload Gallery images</label>
                <input type="file" name="images[]" multiple>
                <div id='result' class="property-gallery-images">
                </div>
                @error('images')
                <div class="error-message-container">
                    <p class="error-message">{{ $message }}</p>
                </div>
            @enderror
            </div>
            <button class="submit">Submit</button>


           

        </div>
        
    </form>
</div>


@endsection
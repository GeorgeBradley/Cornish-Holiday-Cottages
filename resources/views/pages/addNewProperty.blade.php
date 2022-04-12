@extends('layouts.app')
@section('content')

<div class="container m-t-2">
    <form action="{{ route('addNewProperty') }}" method="POST">
        @csrf
        <h3 class="ta-c">Add new property</h3>
        <div class="add-new-property-form">
            <div class="form-control">
                <label for="">Property Name</label>
                <input type="text" name="">
            </div>
            <div class="form-control">
                <label for="">Location</label>
                <input type="text" name="location">
            </div>
            <div class="form-control">
                <label for="">Number of Sleeps:</label>
                <input type="number" value="1" min="1" max="20" name="sleeps">
            </div>
            <div class="form-control">
                <label for="">Number of Bedrooms:</label>
                <input type="number" value="1" min="1" max="20" name="bedrooms">
            </div>
            <div class="form-control">
                <label for="">Are pets allowed?</label>
                <input type="checkbox" name="arePetsAllowed">
            </div>
            <div class="form-control">
                <label for="">Upload Property Thumbnail</label>
                <input type="file" name="propertyThumbnail">
            </div>
            <button class="submit">Submit</button>

        </div>
        
    </form>
</div>


@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\PropertyImages;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function show()
    {
    
        //$properties = Properties::all()->pagina;
        $properties= Property::paginate(10);
        return view('pages.properties')->with('properties', $properties);
    }
    public function property($id)
    {
        $property = Property::find($id);
        return view('pages.property')->with('property', $property);
    }

    public function newProperty(){
        return view('pages.addnewproperty');
    }

    public function store(Request $request) {



        
        $this->validate($request, [

            'property_name'=> 'required|max:100',
            'location_name' => 'required|max:100',
            'about_info' => 'required|max:300',
            'cost' => 'required|numeric',
            'number_of_sleeps' => 'required|integer',
            'number_of_bathrooms' => 'required|integer',
            'number_of_bedrooms' => 'required|integer',
            'property_thumbnail_path' => 'required:mimes:jpg, png, jpeg|max:5048',
            'images' => 'required'
        ]
        );

    
        $newImageName = time() . '-' . $request->property_name . '.' . $request->property_thumbnail_path->extension();
        $request->property_thumbnail_path->move(public_path('images/property-thumbnails'), $newImageName);

        $prop = Property::create([
            'property_title' => $request->property_name,
            'about_info' => $request->about_info,
            'location' => $request->location_name,
            'cost' => $request->cost,   
            'image_path' => $newImageName,   
            'allow_pets' => $request->are_pets_allowed ? 1 : 0,
            'number_of_sleeps' => $request->number_of_sleeps,
            'number_of_bathrooms' => $request->number_of_bathrooms,
            'number_of_bedrooms' => $request->number_of_bedrooms
        ]);

        $productID = $prop->id;
      

        foreach ($request->file('images') as $imagefile) {
            $image = new PropertyImages;
            
   
            $path = $imagefile->store('images/property-gallery-images', ['disk' => 'my_files']);
            dd($path);
            $image->image_path = $path;
            $image->property_id = $productID;
        }   
        
       

          
        
        
      

       
        return redirect()->route('properties');
     
    
    }
}

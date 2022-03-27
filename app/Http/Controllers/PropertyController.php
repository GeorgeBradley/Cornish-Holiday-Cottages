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
        $properties= Property::paginate(3);
        return view('pages.properties')->with('properties', $properties);
    }
    public function property($id)
    {
        
        $property = Property::find($id);
        
        
       
      
        return view('pages.property')->with('property', $property);
    }
}

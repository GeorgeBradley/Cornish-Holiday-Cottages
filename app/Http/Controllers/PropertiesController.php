<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    public function show()
    {
        //$properties = Properties::all()->pagina;
        $properties= DB::table('properties')->paginate(2);
        return view('pages.properties')->with('properties', $properties);
    }
}

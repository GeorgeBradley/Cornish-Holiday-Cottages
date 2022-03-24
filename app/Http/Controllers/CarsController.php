<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\product;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $cars = Car::all()->toJson();
        $cars = json_decode($cars);
       // var_dump($cars);
        //dd($cars);
        return view('cars.index', [
            'cars' => $cars,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //dd('OK');
        // $car = new Car;
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // $car->save();

        // $request->validated();


        //Methods we can use on $request

        //extentions
        //guessExtention()
        //getMimeType()
        //store()
        //asStore()
        //storePublicly()
        //move()
        //getClientOriginalName()
        //getClientMimeType()
        //guessClientExtention
        //getSize() //kilobytes
        //getError()
        //isValid()
    
    
        $request->validate([
            'name' => 'required',
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5058'
        ]);
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);
        //dd($newImageName);
        $test = $request->file('image')->isValid();



        //If it's valid, it will proceed
        //If it's not valid, throw validationException
        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description'),
            'image_path' => $newImageName
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      
        
        $car = Car::find($id);
        $products = product::find($id);

        print_r($products);
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
    
        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateValidationRequest $request, $id)
    {
        $request->validated();

        Car::where('id', $id)->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
 
        $car->delete();
        return redirect('/cars');
    }
}

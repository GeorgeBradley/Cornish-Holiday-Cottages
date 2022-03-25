<?php

namespace App\Models;

use App\Models\PropertyImages;
use App\Models\PropertiesTestimonials;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Properties extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'propertyID';

   // protected $timestamps = false;
 

   protected $fillable = [

    'propertyName', 
    'aboutInfo', 
    'allowPets', 
    'numberOfSleeps', 
    'numberOfBedrooms',
    'propertyLocation', 
    'property_image'

   ];

   protected $hidden = [
     
   ];

   public function propertyImages(){
       return $this->hasMany(PropertyImages::class );
   }
   public function propertyTestimonials(){
    return $this->hasMany(PropertiesTestimonials::class);
}

//    public function engines(){

//     return $this->hasManyThrough(
//         Engine::class, 
//         CarModel::class,
//         'car_id', //Foreign key on CarModel table
//         'model_id'
//     ); //Foreign key on engine table
//    }
   
//    public function productionDate(){
//        return $this->hasOneThrough(CarProductionDate::class,
//        CarModel::class,
//        'car_id',
//        'model_id'
//    );
//    }

//    public function products(){
//        return $this->belongsToMany(Product::class);
//    }
}

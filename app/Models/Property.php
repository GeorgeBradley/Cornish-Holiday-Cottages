<?php

namespace App\Models;


use App\Models\PropertiesTestimonials;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'id';

   // protected $timestamps = false;
 

   protected $fillable = [


    'property_title',
    'cost',
    'about_info',
    'allow_pets', 
    'image_path',
    'number_of_sleeps',
    'number_of_bedrooms',
    'number_of_bathrooms',
    'location', 
   
   ];

   protected $hidden = [
     
   ];

   

   

   public function propertyImages(){

    return $this->hasMany(PropertyImages::class ) ; //Foreign key on CarModel table
       
     //Foreign key on engine table
    }
   
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

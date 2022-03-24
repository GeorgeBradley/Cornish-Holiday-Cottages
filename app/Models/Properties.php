<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'propertyID';

   // protected $timestamps = false;
 

   protected $fillable = [

    'propertyName', 'location', 'description', 'property_image'

   ];

   protected $hidden = [
     
   ];

   public function propertyImages(){
       return $this->hasMany(PropertyImages::class );
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

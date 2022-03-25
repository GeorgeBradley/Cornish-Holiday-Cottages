<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    use HasFactory;

    
    protected $table = 'property_images';
    protected $primaryKey = 'id';

   // protected $timestamps = false;
 

  

   protected $hidden = [
     
   ];
   protected $fillable = [

    'propertyID', 'imagePath'

   ];
}

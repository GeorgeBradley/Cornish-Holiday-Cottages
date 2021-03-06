<?php

namespace App\Models;

use App\Models\Properties;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertiesTestimonials extends Model
{
    use HasFactory;
    protected $table = 'properties_testimonials';
    protected $primaryKey = 'id';

   // protected $timestamps = false;
 

   protected $fillable = [

  
    'name_of_person',

   
    'rating', 
    'testimony', 
    'image_path'

   ];
   public function property()
    {
     
        return $this->belongsTo(Properties::class);
    }
   protected $hidden = [
     
   ];

  

}

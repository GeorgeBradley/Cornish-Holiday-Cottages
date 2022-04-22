<?php

namespace App\Models;

use App\Models\Properties;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyImages extends Model
{
    use HasFactory;

    
    protected $table = 'property_images';
    protected $primaryKey = 'id';

   // protected $timestamps = false;
 

   public function property()
   {
       return $this->belongsTo(Property::class);
   }
   protected $hidden = [
     
   ];
   protected $fillable = [

        'property_id',
        'image_path'

   ];
}

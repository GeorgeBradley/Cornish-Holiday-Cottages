<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteTestimonials extends Model
{
    use HasFactory;

    protected $table = 'website_tesimonials';
    protected $primaryKey = 'id';

   // protected $timestamps = false;
 

   protected $fillable = [

    'nameOfPerson', 'rating', 'rating', 'imagePath'

   ];

   protected $hidden = [
     
   ];

}

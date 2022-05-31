<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class website_info extends Model
{
    protected $table = 'website_infos';
    protected $primaryKey = 'id';

   // protected $timestamps = false;
 

   protected $fillable = [


    'website_name',
    'website_logo_path',
    'page_title',
    'page_description', 
    'admin_email_address',
    'tagline'

   ];

   protected $hidden = [
     
   ];
}

<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
       // use HasFactory;
       use SoftDeletes;
    
       // declare table 
       public $table = 'spesialist';
   
       // this field must be type yyyy-mm-dd hh:mm:ss
       protected $dates=[
           'create_at','update_at','delete_at',
       ];
   
       //fillabel field
       protected $fillLabel=[
        'name','price',
        'create_at','update_at','delete_at',
        ];
}

<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
       // use HasFactory;
       use SoftDeletes;
    
       // declare table 
       public $table = 'permission';
   
       // this field must be type yyyy-mm-dd hh:mm:ss
       protected $dates=[
           'create_at','update_at','delete_at',
       ];
   
       //fillabel field
       protected $fillLabel=[
            'title',
            'create_at','update_at','delete_at',
       ];
}

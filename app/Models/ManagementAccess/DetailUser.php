<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use SoftDeletes;
    
    // declare table 
    public $table = 'detail_user';

    // this field must be type yyyy-mm-dd hh:mm:ss
    protected $dates=[
        'create_at','update_at','delete_at',
    ];

    //fillabel field
    protected $fillLabel=[
        'user_id','type_user_id','contact','address','photo','gender',
        'create_at','update_at','delete_at',
    ];
}

<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
        // use HasFactory;
        use SoftDeletes;
    
        // declare table 
        public $table = 'role_user';
    
        // this field must be type yyyy-mm-dd hh:mm:ss
        protected $dates=[
            'create_at','update_at','delete_at',
        ];
    
        //fillabel field
        protected $fillLabel=[
            'user_id','role_id',
            'create_at','update_at','delete_at',
        ];

        public function role(){
            return $this->belongsTo('App\Models\ManagementAccess\Role','role_id','id');
        }
}

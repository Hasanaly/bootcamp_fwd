<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
        // use HasFactory;
        use SoftDeletes;
    
        // declare table 
        public $table = 'permission_role';
    
        // this field must be type yyyy-mm-dd hh:mm:ss
        protected $dates=[
            'create_at','update_at','delete_at',
        ];
    
        //fillabel field
        protected $fillLabel=[
            'permission_id','role_id',
            'create_at','update_at','delete_at',
        ];

        public function permission(){
            return $this->belongsTo('App\Models\ManagementAccess\Permission','permission_id','id');
        }

        public function role(){
            return $this->belongsTo('App\Models\ManagementAccess\Role','role_id','id');
        }
}

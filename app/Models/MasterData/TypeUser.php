<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
        // use HasFactory;
        use SoftDeletes;
    
        // declare table 
        public $table = 'type_user';
    
        // this field must be type yyyy-mm-dd hh:mm:ss
        protected $dates=[
            'create_at','update_at','delete_at',
        ];
    
        //fillabel field
        protected $fillLabel=[
            'name',
            'create_at','update_at','delete_at',
        ];
        // membuat fungsi has Many dengan nama tabel_tujuan
        public function detail_user(){
            //hasMay dengan 2 parameter ('patch model','field foreign key')
            return $this->hasMany('App\Models\ManagementAccess\DetailUser','type_user_id');
        }
}

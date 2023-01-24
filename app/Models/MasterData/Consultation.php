<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
        // use HasFactory;
        use SoftDeletes;
    
        // declare table 
        public $table = 'consultation';
    
        // this field must be type yyyy-mm-dd hh:mm:ss
        protected $dates=[
            'create_at','update_at','delete_at',
        ];
    
        //fillabel field
        protected $fillLabel=[
            'name',
            'create_at','update_at','delete_at',
        ];

        public function appointment(){
            return $this->hasMany('App\Models\Operational\Appointment','consultation_id');
        }
}

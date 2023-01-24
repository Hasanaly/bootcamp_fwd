<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
        // use HasFactory;
        use SoftDeletes;
    
        // declare table 
        public $table = 'transaction';
    
        // this field must be type yyyy-mm-dd hh:mm:ss
        protected $dates=[
            'create_at','update_at','delete_at',
        ];
    
        //fillabel field
        protected $fillLabel=[
            'appointment','fee_doctor','fee_spesialist','fee_hospital','sub_total','vat','total',
            'create_at','update_at','delete_at',
        ];

        public function appointment(){
            return $this->belongsTo('App\Models\Operational\Appointment','appointment');
        }
}

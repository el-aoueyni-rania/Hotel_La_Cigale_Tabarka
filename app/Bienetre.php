<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bienetre extends Model
{
   // protected $primarykey ="B_id";
   // public $incrementing = false ;


    //relation hasMany to Utilasateurs
    public function user(){
        return $this->belongsTo('App\User');
    }
    //relation hasMany to reservation
        public function reservations(){
            return $this->HasMany('App\Reservation');
        }

        //protected $guarded = [];
}


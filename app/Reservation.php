<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //Relation Belongs to bientre table
        public function bienetre(){
            return $this->belongsTo('App\Bienetre');
        }

}

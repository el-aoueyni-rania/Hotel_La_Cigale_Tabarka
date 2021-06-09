<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reservation extends Model
{
    protected $guarded = [];
    //Relation Belongs to bientre table
        public function bienetre(){
            return $this->belongsTo('App\Bienetre');
        }

        public function user(){
            return $this->belongsTo('App\User');
        }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utlisateur extends Model
{
    //relation belongs to Bienetre table
    public function bienetre(){
        return $this->belongsTo('App\Bienetre');
    }
    public function services(){
        return $this->hasMany('App\Service');
    }
}

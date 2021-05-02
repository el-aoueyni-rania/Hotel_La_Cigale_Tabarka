<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function utilisateur(){
        return $this->belongsTo('App\Utlisateur');
    }
}

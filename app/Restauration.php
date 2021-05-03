<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restauration extends Model
{

    //Relation Belongs to utilisateur table
    public function utlisateur(){
        return $this->belongsTo('App\Utlisateur');
    }

}

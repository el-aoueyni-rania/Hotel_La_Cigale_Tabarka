<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restauration extends Model
{

    //Relation Belongs to utilisateur table
    public function user(){
        return $this->belongsTo('App\User');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Utlisateur extends Model {
    //relation belongs to Bienetre table

    public function bienetre() {
        return $this->belongsTo( 'App\Bienetre' );
    }


    public function reservation() {
        return $this->belongsTo( 'App\Reservation' );
    }

    public function service(){
        return $this->belongsTo('App\Service');
    }

     // relation one to many between restauration and utilisateur
     public function restauration()
    {
        return $this->belongsTo('App\Restauration');
    }

    public function activite()
     {
        return $this->belongsTo('App\Activite');
     }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Utlisateur extends Model {
    //relation belongs to Bienetre table

    public function bienetre() {
        return $this->belongsTo( 'App\Bienetre' );
    }


    public function reservations() {
        return $this->hasMany( 'App\Reservation' );
    }



     // relation one to many between restauration and utilisateur
     public function restaurations()
    {
        return $this->hasMany('App\Restauration');
    }

    public function activite()
     {
        return $this->belongsTo('App\Activite');
     }

    

    // relation one to many between services and utilisateur
    public function services() {
        return $this->hasMany( 'App\Service' );
    }


}

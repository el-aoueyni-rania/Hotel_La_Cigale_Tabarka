<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Utlisateur extends Model {
    //relation belongs to Bienetre table

    public function bienetre() {
        return $this->belongsTo( 'App\Bienetre' );
    }
 

    public function reservations() {
        return $this->hasMany( 'App\Reservation' );
    }


    // public function reservations() {
    //     return $this->hasMany( 'App\Reservation' );
    // }

    // relation one to many between restauration and utilisateur

    public function restaurations() {
        return $this->hasMany( 'App\Restauration' );
    }


// relation one to many between services and utilisateur
    public function services() {
        return $this->hasMany( 'App\Service' );
    }
=======
class Utlisateur extends Model
{
    //relation belongs to Bienetre table
    public function bienetre(){
        return $this->belongsTo('App\Bienetre');
    }

    public function reservations(){
        return $this->hasMany('App\Reservation');
    }

    public function activite()
     {
        return $this->belongsTo('App\Activite');
     }
>>>>>>> eaff1b5e63c43165a4e9c6e35254697188206d22
}

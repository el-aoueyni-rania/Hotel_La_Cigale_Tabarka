<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


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

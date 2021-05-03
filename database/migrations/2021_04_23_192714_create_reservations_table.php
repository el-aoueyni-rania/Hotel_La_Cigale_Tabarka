<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Client_name',30);
            $table->date('date_arrivee');
            $table->integer('nbr_nuits');
            $table->integer('nbr_chambres');
            $table->integer('nbr_adultes');
            $table->integer('nbr_enfants');
<<<<<<< HEAD
            $table->integer('utlisateur_id')->unsigned();
            $table->timestamps();
             $table->foreign('utlisateur_id')->references('id')->on('utlisateurs')->onDelete('restrict')->onUpdate('restrict');

=======
            $table->integer('utilisateur_id')->unsigned();
            $table->timestamps();
            $table->foreign('utilisateur_id')->references('id')->on('utlisateurs')->onDelete('restrict')->onUpdate('restrict');
>>>>>>> eaff1b5e63c43165a4e9c6e35254697188206d22
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}

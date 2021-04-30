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
            $table->timestamps();
            $table->integer('utilisateur_id')->unsigned();
            $table->foreign('utilisateur_id')->references('id')->on('utlisateurs')->onDelete('restrict')->onUpdate('restrict');

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

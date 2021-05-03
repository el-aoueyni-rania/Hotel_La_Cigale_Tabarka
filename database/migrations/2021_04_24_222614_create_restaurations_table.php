<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_restaurant' , 30);
            $table->string('menu');
            $table->string('fruits');
            $table->string('boissons');
            $table->integer('utlisateur_id')->unsigned();
            $table->timestamps();
            $table->foreign('utlisateur_id')->references('id')->on('utlisateurs')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurations');
    }
}

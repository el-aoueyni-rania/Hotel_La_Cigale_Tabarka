<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBienetresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienetres', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Type_de_Bienetres_choisie');
            $table->String('Description');
            $table->integer('prix');
            //$table->String('Picture');

          $table->integer('user_id')->unsigned();
         $table->integer('client_id')->unsigned();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('client_id')->references('id')->on('reservations')->onDelete('cascade')->onUpdate('cascade');


        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bienetres');
    }
}

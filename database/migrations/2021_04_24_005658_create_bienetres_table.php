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
            $table->integer('B_id')->primary();
            $table ->String('Type_de_Bienetres_choisie');
            $table ->String('Description');
            $table->integer('prix');
            $table->integer('user_id')->unsigned();
            $table->integer('ClientID')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('ClientID')->references('id')->on('reservations')->onDelete('restrict')->onUpdate('restrict');
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

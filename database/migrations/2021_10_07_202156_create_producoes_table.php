<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;

class CreateProducoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
/*             $table->unsignedBigInteger('id_fragrancia')->nullable();
            $table->unsignedBigInteger('id_perfume')->nullable();
            $table->unsignedBigInteger('id_estoque')->nullable();
            $table->foreign('id_fragrancia')->references('id')->on('fragrancias');
            $table->foreign('id_perfume')->references('id')->on('perfumes');
            $table->foreign('id_estoque')->references('id')->on('estoque');
 */         $table->double('quantPerfume');
            $table->double('quantAgua')->nullable();
            $table->double('quantAlcool')->nullable();
            $table->double('quantFragrancia')->nullable();
        });
/* 
        Schema::table('producoes', function (Blueprint $table){
            
        }) */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producoes');
    }
}

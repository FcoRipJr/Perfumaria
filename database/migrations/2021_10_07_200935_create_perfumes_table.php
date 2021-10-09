<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;

class CreatePerfumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome',50);
            $table->double('percentAgua');
            $table->double('percentAlcool');
            $table->unsignedInteger('fragrancias')->nullable();
            $table->double('percentFragrancia');
            $table->double('totalProduzido')->nullable();
        });
   /*      Schema::enableForeignKeyConstraints();
        Schema::table('perfumes', function (Blueprint $table){

            $table->foreignID('id_fragrancia')->constrained('fragrancias');

        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfumes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->double('quantPerfume');
            $table->double('quantAgua');
            $table->double('quantAlcool');
            $table->double('quantFragrancia');
        });
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

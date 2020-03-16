<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('marca_id')->unsigned();

            $table->string('serial', 50);
            $table->string('tipo', 50);

            $table->json('caracteristica');

            $table->foreign('marca_id')
            ->references('id')
            ->on('marcas')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE'); 

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
        Schema::dropIfExists('equipos');
    }
}

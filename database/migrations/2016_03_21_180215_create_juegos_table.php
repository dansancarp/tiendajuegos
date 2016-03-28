<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('imagen',30);
            $table->string('voz',30);
            $table->string('texto',30);
            $table->text('descripcion');
            $table->text('requerimientos');
            $table->string('compania',30);
            $table->decimal('precio',5,2);
            $table->date('lanzamiento');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::drop('juegos');
    }
}

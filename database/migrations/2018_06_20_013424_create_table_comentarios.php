<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correo');
            $table->string('nombre');
            $table->string('contenido',500);
            $table->string('avatar')->default('sin_imagen.png');
            $table->boolean('publicado')->default(false);
            $table->boolean('moderado')->default(false);
            
            $table->integer('blog_id')->unsigned()->nullable();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            
            $table->integer('hilo_foro_id')->unsigned()->nullable();
            $table->foreign('hilo_foro_id')->references('id')->on('hilos_foros')->onDelete('cascade');
            
            $table->integer('respuesta_id')->unsigned()->nullable();
            $table->foreign('respuesta_id')->references('id')->on('comentarios')->onDelete('cascade');
                        
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
        Schema::dropIfExists('comentarios');
    }
}
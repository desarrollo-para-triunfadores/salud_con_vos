<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComentariosBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentariosBlog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correo');
            $table->string('nombre');
            $table->string('contenido',500);
            $table->boolean('moderado');
            $table->boolean('publicado');
            
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
                        
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
        Schema::dropIfExists('comentariosBlog');
    }
}

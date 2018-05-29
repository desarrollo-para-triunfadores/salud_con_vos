<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaHilo extends Model
{
	protected $table = "categoriasHilos";

    protected $fillable = ['nombre','descripcion'];

}

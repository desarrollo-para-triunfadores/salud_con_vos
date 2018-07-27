<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $table = "categorias";
    protected $fillable = ['nombre', 'contenidos'];

    public function blogs() {
        return $this->hasMany('App\Blog');
    }
    
    public function hilos_foros() {
        return $this->hasMany('App\HiloForo');
    }

}

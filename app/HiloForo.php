<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HiloForo extends Model {

    protected $table = "hilos_foros";
    protected $fillable = ['titulo', 'correo', 'nombre', 'categoria_id', 'publicado', 'avatar', 'moderado'];

    public function categoria() {
        return $this->belongsTo('App\Categoria');
    }

    public function comentarios() {
        return $this->hasMany('App\Comentario');
    }

    public function getPublicadoAttribute($value) {
        if ($value) {
            return 'Publicado';
        } else {
            return 'No Publicado';
        }
    }

    public function setPublicadoAttribute($value) {
        if ($value === 'true') {
            $this->attributes['publicado'] = true;
        } elseif ($value === 'false') {
            $this->attributes['publicado'] = false;
        }
    }

    public function getModeradoAttribute($value) {
        if ($value) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public function setModeradoAttribute($value) {
        if ($value === 'true') {
            $this->attributes['moderado'] = true;
        } elseif ($value === 'false') {
            $this->attributes['moderado'] = false;
        }
    }

    public function estado_publicado() {
        $estado = "No publicado";
        if ($this->publicado) {
            $estado = "Publicado";
        }
        return $estado;
    }

    public function estado_moderado() {
        $estado1 = "No";
        if ($this->moderado) {
            $estado1 = "Si";
        }
        return $estado1;
    }

}

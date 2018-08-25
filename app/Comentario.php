<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model {

    protected $table = "comentarios";
    protected $fillable = ['correo', 'nombre', 'contenido', 'publicado', 'blog_id', 'hilo_foro_id', 'respuesta_id', 'avatar', 'moderado'];

    public function blog() {
        return $this->belongsTo('App\Blog');
    }

    public function hilo_foro() {
        return $this->belongsTo('App\HiloForo');
    }

    public function respuesta() {
        return $this->belongsTo('App\Comentario');
    }

    public function setCorreoAttribute($value) {
        $this->attributes['correo'] = $value;
    }

    public function setNombreAttribute($value) {
        $this->attributes['nombre'] = $value;
    }

    public function getPublicadoAttribute($value) {
        if ($value) {
            return 'true';
        } else {
            return 'false';
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

}

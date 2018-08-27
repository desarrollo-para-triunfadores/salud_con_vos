<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

    protected $table = "blogs";
    protected $fillable = ['sinopsis', 'titulo', 'subtitulo', 'linkvideo', 'contenido', 'publicado', 'categoria_id', 'user_id'];

    public function categoria() {
        return $this->belongsTo('App\Categoria');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function comentarios() {
        return $this->hasMany('App\Comentario');
    }

    public function imagenes() {
        return $this->hasMany('App\Imagen');
    }

    public function imagen() {
        return $this->imagenes->first();
    }

    public function estado_publicado() {
        $estado = "No publicado";
        if ($this->publicado) {
            $estado = "Publicado";
        }
        return $estado;
    }

    public function datos_imagenes() {
        $datos = [];
        foreach ($this->imagenes as $imagen) {
            $url = 'http://' . $_SERVER["HTTP_HOST"] . '/imagenes/blogs/' . $imagen->nombre;                       
            $dato = ['caption' => $imagen->nombre, 'downloadUrl' => $url, 'size' => $imagen->peso, 'key'=> $imagen->id, 'extra'=> 'dato'];
            array_push($datos, $dato);
        }
        return $datos;
    }

    public function url_imagenes() {
        $urls = [];
        foreach ($this->imagenes as $imagen) {
            $urlimagen = 'http://' . $_SERVER["HTTP_HOST"] . '/imagenes/blogs/' . $imagen->nombre;
            array_push($urls, $urlimagen);
        }

        return $urls;
    }

    public function getPublicadoAttribute($value) {
        if ($value) {
            return 'Si';
        } else {
            return 'No';
        }
    }

    public function setPublicadoAttribute($value) {
        if ($value === 'Si') {
            $this->attributes['publicado'] = true;
        } elseif ($value === 'No') {
            $this->attributes['publicado'] = false;
        }
    }
    
       public function comentarios_publicados() {
        return $this->comentarios->where("publicado", "1");
    }

}

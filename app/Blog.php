<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

    protected $table = "blogs";
    protected $fillable = ['sinopsis', 'titulo', 'subtitulo', 'linkvideo', 'contenido', 'publicado', 'categoria_id', 'user_id'];
    
      public function categoria()   
    {
        return $this->belongsTo('App\Categoria');
    }
    
      public function user()   
    {
        return $this->belongsTo('App\User');
    }

     public function comentarios()
    {
        return $this->hasMany('App\ComentarioBlog');
    }
    
     public function imagenes()
    {
        return $this->hasMany('App\ImagenBlog');
    }
    
     public function estado_publicado()
    {
         $estado = "No publicado";
         if ($this->publicado) {
             $estado = "Publicado";
         }
        return $estado;
    }
    
     public function datos_imagenes()
    {
         $datos = [];
         foreach ($this->imagenes as $imagen){
             $url = 'http://'.$_SERVER["HTTP_HOST"].'/imagenes/blogs/'.$imagen->nombre;
             $dato = ['caption'=>$imagen->nombre, 'downloadUrl'=>$url, 'size'=>$imagen->peso]; 
             array_push($datos, $dato);
         }
        return $datos;
    }
    
     public function url_imagenes()
    {
         $urls = [];
         foreach ($this->imagenes as $imagen){
             $urlimagen = 'http://'.$_SERVER["HTTP_HOST"].'/imagenes/blogs/'.$imagen->nombre;
             array_push($urls, $urlimagen);
         }
         
        return $urls;
    }
    
}

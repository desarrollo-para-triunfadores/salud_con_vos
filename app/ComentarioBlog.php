<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentarioBlog extends Model
{
    protected $table = "comentariosBlog";
    protected $fillable = ['correo', 'nombre', 'contenido', 'moderado','publicado','blog_id'];
    
    public function blog()   
    {
        return $this->belongsTo('App\Blog');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    
    protected $table = "imagenes";
    protected $fillable = ['blog_id', 'nombre', 'peso', 'ancho', 'alto'];
    
    public function blog()   
    {
        return $this->belongsTo('App\Blog');
    }
    
}

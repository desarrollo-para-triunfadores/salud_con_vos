<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenBlog extends Model
{
    
    protected $table = "imagenesBlog";
    protected $fillable = ['blog_id', 'nombre', 'peso', 'ancho', 'alto'];
    
    public function blog()   
    {
        return $this->belongsTo('App\Blog');
    }
    
}

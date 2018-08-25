<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Categoria;
use App\Imagen;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
Use Session;

class BlogsController extends Controller {

    public function __construct() {
        Carbon::setlocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $blogs = Blog::all()->sortByDesc('id');
        return view('/admin/blogs/main')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categorias = Categoria::all();
        return view('/admin/blogs/form/create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $blog = new Blog($request->all());
        if ($request->publicado === 'on') {
            $blog->publicado = 'Si';
        }else{$blog->publicado = 'No';}
        $blog->user_id = Auth::id();
        $blog->save();

        if ($request->hasfile('imagenes')) {
            foreach ($request->file('imagenes') as $clave => $file) {
                $imagen = new Imagen(); //Se instancia un objeto de tipo Imagen
                $imagen->nombre = 'blog_' . $blog->id . '_' . time() . '_' . $clave . '.' . $file->getClientOriginalExtension(); //Se asigna el nombre de la imagen subida al atributo nombre del objeto Imagen
                $imagen->peso = filesize($file);
                $imagen->ancho = getimagesize($file)[0];
                $imagen->alto = getimagesize($file)[1];
                $imagen->blog_id = $blog->id; //Se asigna el id del blog al atributo blog_id del objeto Imagen
                $imagen->save();  //Se guarda el objeto en la base de datos
                Storage::disk('blogs')->put($imagen->nombre, \File::get($file));
            }
        }

        Session::flash('message', '¡Se ha registrado un nuevo Blog!');
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id) {
        $blog = Blog::find($id);
        $urls = json_encode($blog->url_imagenes());
        $datos_imagenes = json_encode($blog->datos_imagenes());
        $categorias = Categoria::all();
        
        return view('/admin/blogs/form/show')
                        ->with('categorias', $categorias)
                        ->with('blog', $blog)
                        ->with('urls', $urls)
                        ->with('datos_imagenes', $datos_imagenes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $blog = Blog::find($id);
        $urls = json_encode($blog->url_imagenes());
        $datos_imagenes = json_encode($blog->datos_imagenes());
        $categorias = Categoria::all();
        return view('/admin/blogs/form/update')
                        ->with('categorias', $categorias)
                        ->with('blog', $blog)
                        ->with('urls', $urls)
                        ->with('datos_imagenes', $datos_imagenes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $blog = Blog::find($id);
        if ($request->publicado === 'on') {
            $blog->publicado = 'Si';
        }else{$blog->publicado = 'No';}
        $blog->fill($request->all());
        $blog->save();

        if ($request->hasfile('imagenes')) {

            /*
             * Borramos las imágenes asociadas al blog
             */
            foreach ($blog->imagenes as $imagen) {
                Storage::disk('blogs')->delete($imagen->nombre);
                $imagen->delete();
            }

            /*
             * Cargamos las imágenes que nos hayan facilitado
             */
            foreach ($request->file('imagenes') as $clave => $file) {
                $imagen = new Imagen(); //Se instancia un objeto de tipo Imagen
                $imagen->nombre = 'blog_' . $blog->id . '_' . time() . '_' . $clave . '.' . $file->getClientOriginalExtension(); //Se asigna el nombre de la imagen subida al atributo nombre del objeto Imagen
                $imagen->peso = filesize($file);
                $imagen->ancho = getimagesize($file)[0];
                $imagen->alto = getimagesize($file)[1];
                $imagen->blog_id = $blog->id; //Se asigna el id del blog al atributo blog_id del objeto Imagen
                $imagen->save();  //Se guarda el objeto en la base de datos
                Storage::disk('blogs')->put($imagen->nombre, \File::get($file));
            }
        }

        Session::flash('message', '¡Se han registrado los cambios al Blog!');
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $blog = Blog::find($id);

        /*
         * Borramos las imágenes asociadas al blog
         */
        foreach ($blog->imagenes as $imagen) {
            Storage::disk('blogs')->delete($imagen->nombre);
            $imagen->delete();
        }

        $blog->delete();
        Session::flash('message', '¡El Blog ha sido eliminado!');
        return redirect()->route('blogs.index');
    }
    
}

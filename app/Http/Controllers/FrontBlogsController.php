<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comentario;
use App\Categoria;
use Carbon\Carbon;

class FrontBlogsController extends Controller {

    public function __construct() {
        Carbon::setlocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        /*
         * Definimos las variables con las cuales vamos a trabajar
         */
        $blogs = Blog::orderBy('id', 'DESC')->paginate(10);
        $categoria_seleccionada = "todas las categorías";

        if ($request->buscar) {

            /*
             * Solicitud de filtrado por contenido 
             */
            $palabra = "%" . $request->buscar . "%";
            $blogs = Blog::where('titulo', 'like', $palabra)->orderBy('id', 'DESC')->paginate(10);
            $categoria_seleccionada = "todos los artículos que contienen: " . $request->buscar;
        } elseif ($request->categoria) {
            /*
             * Solicitud de filtrado por categoría 
             */
            $blogs = Blog::where('categoria_id', $request->categoria)->orderBy('id', 'DESC')->paginate(10);
            $categoria_seleccionada = Categoria::find($request->categoria)->nombre;
        }

        return view('sitio_publico.blogs.main')
                        ->with('categoria_seleccionada', $categoria_seleccionada)
                        ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $blog = Blog::find($id);
        $comentarios = Comentario::where('blog_id', $id)->orderBy('id', 'DESC')->paginate(10);
        return view('sitio_publico.blogs.articulo')
                        ->with('blog', $blog)
                        ->with('comentarios', $comentarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}

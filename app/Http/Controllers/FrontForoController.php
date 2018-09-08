<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\Categoria;
use App\HiloForo;
use Carbon\Carbon;
Use Session;

//use  Illuminate\Support\Collection as Collection;

class FrontForoController extends Controller {

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
        $hilos_foros = HiloForo::where('publicado', 1)->where('moderado', 1);
        $categoria_seleccionada = "todas las categorías";

        if ($request->buscar) {

            /*
             * Solicitud de filtrado por contenido 
             */
            $palabra = "%" . $request->buscar . "%";
            $hilos_foros = $hilos_foros->where('titulo', 'like', $palabra);
            $categoria_seleccionada = "todos los hilos que contienen: " . $request->buscar;
        } elseif ($request->categoria) {
            /*
             * Solicitud de filtrado por categoría 
             */

            $categoria = Categoria::where('slug', $request->categoria)->firstOrFail();
            $hilos_foros = $hilos_foros->where('categoria_id', $categoria->id);
            $categoria_seleccionada = $categoria->nombre;
        }

        $hilos_foros = $hilos_foros->orderBy('id', 'DESC')->paginate(10);


        return view('sitio_publico.foro.main')
                        ->with('categoria_seleccionada', $categoria_seleccionada)
                        ->with('hilos_foros', $hilos_foros);
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
        $hilo_foro = new HiloForo($request->all());
        $hilo_foro->slug = Str_slug($request->titulo." ".time()); //Linea agregada para el slug
        $hilo_foro->save();
        Session::flash('message_hilo_nuevo', '¡Hola '.$hilo_foro->nombre.'!. Antes de que tu mensaje sea publicado pasará por un proceso de moderación. Tan pronto los administradores la publiquen te avisaremos a tu correo. ¡Nos vemos pronto!');
        return redirect()->route('front_foros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {

        $hilo_foro = HiloForo::where('slug', $slug)->firstOrFail();
        $comentarios = Comentario::where('hilo_foro_id', $hilo_foro->id)
                        ->where('moderado', 1)
                        ->where('publicado', 1)
                        ->orderBy('id', 'DESC')->paginate(10);
        return view('sitio_publico.foro.hilo_foro')
                        ->with('hilo_foro', $hilo_foro)
                        ->with('comentarios', $comentarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        dd($id, "edit");
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

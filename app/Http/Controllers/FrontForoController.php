<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\Categoria;
use App\HiloForo;
use Carbon\Carbon;

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
        $hilos_foros = HiloForo::orderBy('id', 'DESC')->paginate(10);
        $categoria_seleccionada = "todas las categorías";

        if ($request->buscar) {

            /*
             * Solicitud de filtrado por contenido 
             */
            $palabra = "%" . $request->buscar . "%";
            $hilos_foros = HiloForo::where('titulo', 'like', $palabra)->orderBy('id', 'DESC')->paginate(10);
            $categoria_seleccionada = "todos los hilos que contienen: " . $request->buscar;
        } elseif ($request->categoria) {
            /*
             * Solicitud de filtrado por categoría 
             */
            $hilos_foros = HiloForo::where('categoria_id', $request->categoria)->orderBy('id', 'DESC')->paginate(10);
            $categoria_seleccionada = Categoria::find($request->categoria)->nombre;
        }

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
        $hilo_foro->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $hilo_foro = HiloForo::find($id);
        $comentarios = Comentario::where('hilo_foro_id', $id)
                ->where('moderado', 1)
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

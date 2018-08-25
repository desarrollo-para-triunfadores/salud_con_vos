<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Categoria;
use App\HiloForo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
Use Session;

class HilosForosController extends Controller {

    public function __construct() {
        Carbon::setlocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categorias = Categoria::all();
        $hilos_foros = HiloForo::all();
        return view('/admin/foros/main')->with('hilos_foros', $hilos_foros)->with('categorias', $categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categorias = Categoria::all();
        return view('/admin/foros/form/create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $hilo_foro = new HiloForo($request->all());
        if (is_null($request->nombre)) {
            $hilo_foro->nombre = Auth::user()->name;
            $hilo_foro->correo = Auth::user()->email;
        }

        if ($request->publicado == "on") {
            $hilo_foro->publicado = "true";
        } else {
            $hilo_foro->publicado = "false";
        }
        $hilo_foro->save();
        Session::flash('message', '¡Se ha agregado un hilo!');
        return redirect()->route('foros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        if (is_null($id)) {
            $categorias = Categoria::all();
            $hilos_foros = HiloForo::all()->whereIn('moderado', true);
            return view('/admin/foros/mainNuevos')->with('hilos_foros', $hilos_foros)->with('categorias', $categorias);
        } else {
            $hilo_foro = HiloForo::find($id);
            $categorias = Categoria::all();
            return view('/admin/foros/form/show')->with('hilo_foro', $hilo_foro)->with('categorias', $categorias);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $hilo_foro = HiloForo::find($id);
        $categorias = Categoria::all();
        return view('/admin/foros/form/update')
                        ->with('categorias', $categorias)
                        ->with('hilo_foro', $hilo_foro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $hilo_foro = HiloForo::find($id);
        $hilo_foro->fill($request->all());
        $hilo_foro->save();
        Session::flash('message', '¡Se ha actualizado la información del hilo!');
        return redirect()->route('foros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $hilo_foro = HiloForo::find($id);
        $hilo_foro->delete();
        Session::flash('message', '¡El Hilo ha sido eliminado!');
        return redirect()->route('foros.index');
    }

    public function indexNuevos() {
        $categorias = Categoria::all();
        $hilos_foros = HiloForo::all()->whereIn('moderado', 'false');
        $comentarios = Comentario::all()->whereIn('moderado', 'false');
        return view('/admin/foros/mainNuevos')
                        ->with('hilos_foros', $hilos_foros)
                        ->with('categorias', $categorias)
                        ->with('comentarios', $comentarios);
    }

    public function moderar_masivamente(Request $request) {
        foreach ($request->array as $hilo) {
            $hilo_foro = HiloForo::find($hilo);
            $hilo_foro->moderado = 'true';
            $hilo_foro->save();
        }
        return response()->json('Se moderaron los hilos con éxito');
    }

    public function eliminar_masivamente(Request $request) {
        foreach ($request->array as $id) {
            $hilo_foro = HiloForo::find($id);
            $hilo_foro->delete();
        }
        return response()->json('Se eliminaron los hilos con éxito');
    }

}

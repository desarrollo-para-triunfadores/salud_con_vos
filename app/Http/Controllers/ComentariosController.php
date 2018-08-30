<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ComentariosController extends Controller {

    public function __construct() {
        Carbon::setlocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $comentarios = Comentario::all();
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
        $comentario = new Comentario($request->all());

        if (is_null($request->nombre)) {
            $comentario->nombre = Auth::user()->name;
            $comentario->correo = Auth::user()->email;
        }

        $comentario->save();

        if (is_null($request->nombre)) {
            return redirect()->route('foros.show', [$request->hilo_foro_id]);
        } else {
            return redirect()->route('foros.show', [$request->hilo_foro_id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
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
        $comentario = Comentario::find($id);
        $comentario->fill($request->all());
        if ($request->publicado === 'true'){
            $comentario->moderado = 'true';
        }
        $comentario->save();
        //Si la respuesta vino por JSON, se debe contestar por JSON
        if ($request->ajax()) {
            return response()->json($comentario);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $comentario = Comentario::find($id);
        $comentario->delete();
    }

    public function moderar_masivamente(Request $request) {
        if ($request->ids_comentarios_publicar) {
            foreach ($request->ids_comentarios as $id_comentario) {
                $comentario = Comentario::find($id_comentario);
                $comentario->moderado = 'true';
                $comentario->save();
            }
            foreach ($request->ids_comentarios_publicar as $id_comentario) {
                $comentario = Comentario::find($id_comentario);
                $comentario->publicado = 'true';
                $comentario->save();
            }
            return response()->json('Se moderaron y publicaron los comentarios con éxito');
        } else if ($request->ids_comentarios) {
            foreach ($request->ids_comentarios as $id_comentario) {
                $comentario = Comentario::find($id_comentario);
                $comentario->moderado = 'true';
                $comentario->save();
                return response()->json('Se moderaron los comentarios con éxito');
            }
        }
    }

    public function eliminar_masivamente(Request $request) {
        foreach ($request->array as $id) {
            $comentario = Comentario::find($id);
            $comentario->delete();
        }
        return response()->json('Se eliminaron los comentarios con éxito');
    }

}

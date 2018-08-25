<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
Use Session;

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
        foreach ($request->array as $comentario) {
            $comentario_a = Comentario::find($comentario);
            $comentario_a->moderado = 'true';
            $comentario_a->save();
        }
        return response()->json('Se moderaron los comentarios con éxito');
    }

    public function eliminar_masivamente(Request $request) {
        foreach ($request->array as $id) {
            $comentario = Comentario::find($id);
            $comentario->delete();
        }
        return response()->json('Se eliminaron los comentarios con éxito');
    }
}

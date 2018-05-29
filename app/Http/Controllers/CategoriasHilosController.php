<?php

namespace App\Http\Controllers;

use App\CategoriaHilo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
Use Session;

class CategoriasHilosController extends Controller
{

    public function __construct() {
        Carbon::setlocale('es');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CategoriasHilos = CategoriaHilo::all();
        return view('/admin/categoriasHilos/main')->with('CategoriasHilos', $CategoriasHilos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $CategoriaHilo = new CategoriaHilo($request->all());
        $CategoriaHilo->save();
        Session::flash('message', '¡Se ha registrado a una nueva categoría de hilos!');
        return redirect()->route('CategoriasHilos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriasHilos  $categoriasHilos
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaHilo $categoriasHilos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriasHilos  $categoriasHilos
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaHilo $categoriasHilos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriasHilos  $categoriasHilos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaHilo $categoriasHilos)
    {
        $CategoriaHilo = CategoriaHilo::find($id);
        $CategoriaHilo->fill($request->all());
        $CategoriaHilo->save();
        Session::flash('message', '¡Se ha actualizado la información de la categoría con éxito!');
        return redirect()->route('CategoriasHilos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriasHilos  $categoriasHilos
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaHilo $categoriasHilos)
    {
        $CategoriaHilo = CategoriaHilo::find($id);
        $CategoriaHilo->delete();
        Session::flash('message', '¡La categoría seleccionada ha sido eliminada!');
        return redirect()->route('CategoriasHilos.index');
    }
}

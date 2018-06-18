<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use Storage;

class UserController extends Controller
{

    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('/admin/usuarios/main')
            ->with('usuarios', $users);
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
        $nombreImagen = 'sin_imagen.png';
        if ($request->file('imagen')) {
            /**
             * Si se manda una imagen para el perfil la almacenamos y luego la
             * vinculamos al user
             */
            $file = $request->file('imagen');
           
            $nombreImagen = 'usuario_' . time() . '.png';
            Storage::disk('usuarios')->put($nombreImagen, \File::get($file));
        }

        $user = new User($request->all());
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->imagen = $nombreImagen;
        $user->save();

        Session::flash('message', '¡Se ha registrado a un nuevo usuario con éxito!');
        return response()->json('ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Actualizar el password del usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actPass(Request $request, $id)
    {

        /**
         * Este método se encarga de actualizar únicamente la contraseña
         * del usuario logueado.
         */

        $usuario = User::find($id);
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        Session::flash('message', '¡Se ha actualizado el password del usuario con éxito!');
        return redirect()->route('admin.usuarios.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        $nombreImagen = "sin_imagen.png";

        if ($request->file('imagen')) {
            /**
             * Si se manda una imagen para el perfil la almacenamos y luego la
             * vinculamos al user
             */

            $file = $request->file('imagen');
            $nombreImagen = 'usuario_' . time() . '.png';
            if ((Storage::disk('usuarios')->exists($usuario->imagen)) && ($usuario->imagen !== "sin_imagen.png")) {
                Storage::disk('usuarios')->delete($usuario->imagen); // Borramos la imagen anterior.
            }
            Storage::disk('usuarios')->put($nombreImagen, \File::get($file)); // Movemos la imagen nueva al directorio /imagenes/usuarios
        }

        $usuario->fill($request->all());
        if ($nombreImagen !== "") {
            /**
             * Actualizamos el nombre de la nueva imagen.
             */
            $usuario->imagen = $nombreImagen;
        }
        $usuario->save();

        Session::flash('message', '¡Se ha actualizado la información del usuario con éxito!');
        return response()->json('ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        if ($usuario->imagen != 'sin_imagen.png') {
            /**
             * Borramos la imagen asociada.
             */
            Storage::disk('usuarios')->delete($usuario->imagen);
        }
        $usuario->delete();
        Session::flash('message', '¡El usuario seleccionado a sido eliminado!');
        return redirect()->route('usuarios.index');
    }

}
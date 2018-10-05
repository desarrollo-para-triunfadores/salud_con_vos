<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class EmailController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
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
        $data = array(
            'name' => $request->nombre,
            'email' => $request->correo,
            'mensaje' => $request->contenido
        );

        Mail::send('emails.mail', $data, function ($message) {
            $message->from('saludconvos@gmail.com', 'Mensaje enviado desde saludconvos.misiones.gob.ar');
            $message->to('hacho.kuszniruk@gmail.com')->subject('Mensaje enviado desde saludconvos.misiones.gob.ar');
        });

        Session::flash('message_contacto', '¡Hola '.$request->nombre.'!. Tu mensaje ha sido enviado. ¡Pronto nos pondremos en contacto contigo!');
        return redirect()->route('inicio');
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

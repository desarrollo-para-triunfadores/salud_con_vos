<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
Route::get('/', function () {
    return view('sitio_publico.inicio.main');
});

Route::get('/contacto', function () {
    return view('sitio_publico.contacto.main');
});

Route::get('/quienes_somos', function () {
    return view('sitio_publico.quienes_somos.main');
});

Route::resource('front_foros', 'FrontForoController');
Route::resource('front_blogs', 'FrontBlogsController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    /**
     * Rutas genericas a controladores
     */
    Route::resource('usuarios', 'UserController');
    Route::resource('categorias', 'CategoriasController');
    Route::resource('blogs', 'BlogsController');
    Route::resource('foros', 'HilosForosController');
    Route::resource('comentarios', 'ComentariosController');
    //Route::view('/foros/mainNuevos', 'HilosForosController@indexNuevos');




    /**
     * Rutas para métodos o funciones específicas
     */
    Route::get('/configuracion', function () {// esta ruta es solo para zafar, pero hay que hacer un controller con la info de la empresa
        return view('admin.configuracion.main');
    });
    Route::get('/indexNuevos', 'HilosForosController@indexNuevos')->name('HilosNuevos');
    Route::get('/moderar_masivamente_hilos', 'HilosForosController@moderar_masivamente');
    Route::get('/moderar_masivamente_comentarios', 'ComentariosController@moderar_masivamente');
});

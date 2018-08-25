<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composers
        ([
            'App\Http\ViewComposers\ArticulosNuevosComposer' => ['sitio_publico.partes.pie', 'sitio_publico.inicio.articulos', 'sitio_publico.blogs.panel'],
            'App\Http\ViewComposers\CategoriasComposer' => ['sitio_publico.partes.pie', 'sitio_publico.inicio.articulos', 'sitio_publico.blogs.main', 'sitio_publico.partes.form_hilo_foro_nuevo', 'sitio_publico.foro.panel', 'sitio_publico.blogs.panel'],
            'App\Http\ViewComposers\HIlosNuevosComposer' => 'sitio_publico.foro.panel'
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

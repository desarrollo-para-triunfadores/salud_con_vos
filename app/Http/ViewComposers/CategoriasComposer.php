<?php 


namespace App\Http\ViewComposers;

use App\Categoria;
use Illuminate\Contracts\View\View;


class CategoriasComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */

    public function compose(View $view)
    {                        
        $categorias = Categoria::all();
        $view->with('categorias', $categorias);

    }
}
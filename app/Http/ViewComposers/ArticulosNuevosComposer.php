<?php

namespace App\Http\ViewComposers;

use App\Blog;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;

class ArticulosNuevosComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function __construct() {
        Carbon::setlocale('es');
    }

    public function compose(View $view) {
        $blogs = Blog::all()->where('publicado', 'Si')->sortByDesc('id')->take(4);
        $view->with('blogs_nuevos', $blogs);
    }

}

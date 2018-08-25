<?php

namespace App\Http\ViewComposers;

use App\HiloForo;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;

class HIlosNuevosComposer {

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
        $hilos_foros = HiloForo::all()->sortByDesc('id')->take(5);
        $view->with('hilos', $hilos_foros);
    }

}

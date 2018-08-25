<?php

use App\HiloForo;
use Illuminate\Database\Seeder;

class HilosForosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $hilo_1 = HiloForo::create([
                    'titulo' => 'Tips para el acné',
                    'contenido' => 'Aca va un contenido',
                    'correo' => 'jacinto_15@hotmail.com',
                    'nombre' => 'Jacinto Fernandez',
                    'categoria_id' => "1"
        ]);
        $hilo_2 = HiloForo::create([
                    'titulo' => 'Feminismo sin violencia',
                    'contenido' => 'Aca va un contenido 2',
                    'correo' => 'EsmeraldaNavarro@outlook.com',
                    'nombre' => 'Esmeralda Navarro',
                    'categoria_id' => "12"
        ]);
        $hilo_3 = HiloForo::create([
                    'titulo' => 'Anecdotas de tu primera vez',
                    'contenido' => 'Aca va un contenido 3',
                    'correo' => 'Mario1@hotmail.com',
                    'nombre' => 'Mario Casola',
                    'categoria_id' => "11"
        ]);
    }

}

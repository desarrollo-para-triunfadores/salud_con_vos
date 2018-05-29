<?php

use App\CategoriaHilo;
use Illuminate\Database\Seeder;

class CategoriasHilosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria_1 = CategoriaHilo::create([
            'nombre' => 'Identidad de Género',
            'descripcion' => 'La identidad es una eleccion, el que pobo y volvio es el que esta mas seguro de lo que quiere'
        ]);

         $categoria_2 = CategoriaHilo::create([
            'nombre' => 'Sexualidad social',
            'descripcion' => 'La sexualidad en el entorno de cada ser'
        ]);

          $categoria_3 = CategoriaHilo::create([
            'nombre' => 'Embarazo',
            'descripcion' => 'Vacunas, estudios, detalles cotidianos de la mujer embarazada, cuidados desde su entorno'
        ]);
    }
}

<?php

use App\Comentario;
use Illuminate\Database\Seeder;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $comentario_1 = Comentario::create([
                    'contenido' => 'Tips para el acné',
                    'correo' => 'jacinto_15@hotmail.com',
                    'nombre' => 'Jacinto Fernandez',
                    'hilo_foro_id' => '1',
        ]);
        $comentario_2 = Comentario::create([
                    'contenido' => 'Tips para el acné 2',
                    'correo' => 'jacinto_15@hotmail.com2',
                    'nombre' => 'Jacinto Fernandez 2',
                    'blog_id' => '2',
        ]);
        $comentario_3 = Comentario::create([
                    'contenido' => 'Tips para el acné 3',
                    'correo' => 'jacinto_15@hotmail.com3',
                    'nombre' => 'Jacinto Fernandez 3',
                    'blog_id' => '3',
        ]);
    }

}
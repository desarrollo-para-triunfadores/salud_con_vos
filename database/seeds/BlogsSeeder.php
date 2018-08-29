<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog_1 = Blog::create([
            'titulo' => 'Consejos para tu primera vez',
            'sinopsis' => 'Claves para una buena experiencia. Manera correcta de ponerse el forro. ¿Cuándo es el momento adecuado?',
            'linkvideo' =>'http://www.youtube.com',
            'contenido' =>'Los posts que enseñan recursos (herramientas o aplicaciones, por ejemplo) en forma de lista son enormemente viralizados ya que ofrecen al lector un número de instrumentos con los que podemos mejorar nuestras tareas.',
            'publicado' =>true,
            'categoria_id' => "1",
            'user_id' =>"1"
        ]);
        
        $blog_2 = Blog::create([
            'titulo' => 'Números de instituciones de ayuda para padecientes de efermedades de transmision sexual',
            'sinopsis' => '¿Conocés todas las instituciones que te pueden ayudar si padeces alguna enfermedad de transmision sexual? Aca te contamos todas y como acercarte a ellas sin perder el anonimato.',
            'linkvideo' =>'http://www.youtube.com',
            'contenido' =>'Incluye las palabas “herramientas”, “aplicaciones” o “recursos” en tus títulos y verás cómo el porcentaje de visitas aumenta. Y si lo combinas con números, ay amiguete, aquí ya has triunfado.',
            'publicado' =>false,
            'categoria_id' => '2',
            'user_id' =>'2'
        ]);
        
        $blog_3 = Blog::create([
            'titulo' => 'Diversion sana en el boliche del barrio',
            'sinopsis' => 'Los boliches son el lugar predilecto de los adolecentes para divertirse, pero tambien es un lugar peligroso si no se sabe cuidar',
            'linkvideo' =>'http://www.youtube.com',
            'contenido' =>'Todos queremos leer el mejor contenido del mundo mundial, y si nos resumen en posts lo mejorcito de un tema… ¿cómo no vamos a clicar y leer? Por eso es esencial incluir “mejor/es” en el título –siempre que sea verdad, por supuesto-.',
            'publicado' =>true,
            'categoria_id' => '3',
            'user_id' =>'3'
        ]);
    }
}

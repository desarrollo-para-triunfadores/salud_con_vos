<?php

use Illuminate\Database\Seeder;
use App\Categoria;


class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        $categoria_1 = Categoria::create([
                    'nombre' => 'Cambios en tu cuerpo',
                    'contenidos' => 'Granitos: cómo cuidar tu piel. Todo lo que tenes que saber sobre la menstruación. Dolores menstruales: como calmarlos. Cambios Hormonales: qué son y cómo inciden en vos. Cada uno a su ritmo: los cambios en la adolescencia son diferentes'
        ]);

        $categoria_2 = Categoria::create([
                    'nombre' => 'Controles de salud',
                    'contenidos' => 'Si estoy sano, ¿por qué tengo que ir al médico? Lo que hablás en el consultorio queda en el consultorio: tu derecho a la confidencialidad.'
        ]);

        $categoria_3 = Categoria::create([
                    'nombre' => 'Vacunas',
                    'contenidos' => '¿Cuáles son las vacunas que hay que ponerse durante la adolescencia y para qué sirven? Vacuna HPV: ¿qué es y para qué sirve? ¿Qué hago si me olvide de la segunda o tercer dosis?'
        ]);

        $categoria_4 = Categoria::create([
                    'nombre' => 'Sexualidad',
                    'contenidos' => 'La primera vez: …. Aprender a decir no. Valores. Mi cuerpo y el cuerpo del otro.'
        ]);

        $categoria_5 = Categoria::create([
                    'nombre' => 'Métodos anticonceptivos',
                    'contenidos' => 'Todo lo que querés saber sobre métodos anticonceptivos. ¿Cuál es el método anticonceptivo ideal para mi? ¿Qué es el chip? ¿Cuanto dura un chip? Pros y contras de las pastillas. Tipos de pastillas. Inyectable.'
        ]);

        $categoria_6 = Categoria::create([
                    'nombre' => 'Embarazo',
                    'contenidos' => 'Los test de embarazo. Qué es la pastilla del día después. No estas sola: donde recurrir si tenés dudas. Mi novia esta embarazada: qué hago. ¿Es verdad que la primera vez no quedás embarazada? Si tengo sexo oral, puedo quedar embarazada?'
        ]);

        $categoria_7 = Categoria::create([
                    'nombre' => 'Enfermedades de transmisión sexual',
                    'contenidos' => '¿Qué son las enfermedades de Transmisión sexual y cómo se previenen? Bendito preservativo: todo lo que el forro puede hacer por vos.'
        ]);

        $categoria_8 = Categoria::create([
                    'nombre' => 'Hábitos saludables',
                    'contenidos' => 'Alimentación en la adolescencia: esas ganas de comerse todo. La mejor dieta: la que no es dieta. Sabías que en la adolescencia. Hábitos para toda la vida.'
        ]);

        $categoria_9 = Categoria::create([
                    'nombre' => 'Emociones',
                    'contenidos' => 'Cuando la vida pesa. Socorro: siento que es el fin del mundo. Repetir la historia o construir tu propio camino. Si lastima no es chiste: Bullying, Grumming, Cutting, Ciberbylling.'
        ]);

        $categoria_10 = Categoria::create([
                    'nombre' => 'Drogas y alcohol',
                    'contenidos' => 'Drogas: a mi no me va a pasar. Compromiso conductor asignado. Desafío: cómo divertirse sin alcohol. Alcohol: algo más que desinhibición. 10 formas de divertirse sin emborracharse. Parar antes de perder el control.'
        ]);

        $categoria_11 = Categoria::create([
                    'nombre' => 'Tus derechos en salud',
                    'contenidos' => 'Acceso a un servicio digno'
        ]);

        $categoria_12 = Categoria::create([
                    'nombre' => 'Tu vos cuenta',
                    'contenidos' => 'Paredes que hablan. Rapeando. Compartì tu rap. ¿Qué letra le pondrías? Tweet a tu yo del pasado. Las cosas que hice bajo el alcohol … y que no me gustaría repetir. Subí tu dibujo. Taller en escuela:'
        ]);
    }
}

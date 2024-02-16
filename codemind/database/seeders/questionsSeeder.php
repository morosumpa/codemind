<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class questionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Git Question 1
        DB::table('questions')->insert([
            'QuestionText' => 'Comando para inicializar un nuevo repositorio Git.',
            'world_id'=>5,
            'image'=>'QHTML1.PNG'
        ]);

        // Git Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se añaden archivos al área de preparación (staging area) en Git?',
            'world_id'=>5,
            'image'=>'QHTML9.PNG'
        ]);

        // Git Question 3
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el comando para confirmar los cambios y escribir un mensaje de commit?',
            'world_id'=>5,
            
            'image'=>'QHTML9.PNG'
        ]);

        // Git Question 4
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo deshacer los cambios locales y restaurar un archivo al estado del último commit?',
            'world_id'=>5,
            
            'image'=>'QHTML9.PNG'
        ]);

        // Git Question 5
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la diferencia entre git pull y git fetch?',
            'world_id'=>5,
            'image'=>'QHTML9.PNG'
        ]);

        // Git Question 6
        DB::table('questions')->insert([
            'QuestionText' => 'Comando para crear y cambiar a una nueva rama en Git.',
            'world_id'=>5,
            'image'=>'QHTML9.PNG'
        ]);

        // Git Question 7
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo fusionar una rama específica con la rama actual en Git?',
            'world_id'=>5,
            'image'=>'QHTML9.PNG'
        ]);

        // Git Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo reescribir la historia del repositorio Git utilizando la herramienta de rebase interactivo?',
            'world_id'=>5,
            'image'=>'QHTML9.PNG'
        ]);

        // Git Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el propósito del comando git bisect y cómo se utiliza?',
            'world_id'=>5,
            'image'=>'QHTML9.PNG'
        ]);

        // Git Question 10
        DB::table('questions')->insert([
            'QuestionText' => 'Explica el uso del comando git filter-branch y proporciona un ejemplo práctico de su aplicación.',
            'world_id'=>5,
            'image'=>'QHTML9.PNG'
        ]);

        // HTML/CSS Question 1
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se escribe un párrafo en HTML?',
            'world_id'=>1,
            'image'=>'QHTML1.PNG'
        ]);

        // HTML/CSS Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la etiqueta correcta para crear una lista numerada en HTML?',
            'world_id'=>1,
            'image'=>'QHTML2.PNG'

        ]);

        // HTML/CSS Question 3
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se cierra una etiqueta?',
            'world_id'=>1,
            'image'=>'QHTML3.PNG'

        ]);

        // HTML/CSS Question 4
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la función de la etiqueta <head> en un documento HTML?',
            'world_id'=>1,
            'image'=>'QHTML4.PNG'

        ]);

        // HTML/CSS Question 5
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué hace la etiqueta <a> de HTML?',
            'world_id'=>1,
            'image'=>'QHTML5.PNG'

        ]);

        // HTML/CSS Question 6
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es el margen?',
            'world_id'=>1,
            'image'=>'QHTML6.PNG'

        ]);

        // HTML/CSS Question 7
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo puedes mostrar las letras de un párrafo en rojo?',
            'world_id'=>1,
            'image'=>'QHTML7.PNG'

        ]);

        // HTML/CSS Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la propiedad para cambiar el tamaño de la letra?',
            'world_id'=>1,
            'image'=>'QHTML8.PNG'

        ]);

        // HTML/CSS Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se aplica el margen de 10 píxeles a todos los lados de un elemento?',
            'world_id'=>1,
            'image'=>'QHTML9.PNG'

        ]);

        // HTML/CSS Question 10
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo puedes el fondo de un botón a color negro y letras rojas?',
            'world_id'=>1,
            'image'=>'QHTML10.PNG'

        ]);

        // Java Question 1
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es una variable de Java?',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // Java Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es un string?',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // Java Question 3
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se llama la acción de repetir un bloque de código varias veces en Java?',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // Java Question 4
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la sintaxis correcta para mostrar en la consola de Java?',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // Java Question 5
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el operador que se utiliza para comprobar si dos valores son diferentes?',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // Java Question 6
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué hace el siguiente código? int x = 10; if (x > 5) { System.out.println("¡Es mayor que 5!"); } else { System.out.println("No es mayor que 5."); }',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // Java Question 7
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué muestra este código? for (int i = 1; i <= 3; i++) { System.out.print(i + " "); }',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // Java Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué hace el siguiente código? String mensaje = “Hola”; System.out.println(mensaje.length());',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // Java Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué muestra el siguiente código? int a = 8; int b = 5; if (a > b) { System.out.println("a es mayor que b."); } else if (a < b) { System.out.println("a es menor que b."); } else { System.out.println("a y b son iguales."); }',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // Java Question 10
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué hace el siguiente código? for (int i = 0; i < 5; i++) { if (i % 2 == 0) { System.out.println(i); } }',
            'world_id'=>2,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 1
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el significado de la sigla "JS"?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se declara una variable en JavaScript utilizando la palabra clave let?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 3
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la forma correcta de comentar múltiples líneas en JavaScript?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 4
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál de los siguientes es un tipo de dato primitivo en JavaScript?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 5
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la función que se utiliza para imprimir en la consola en JavaScript?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 6
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué operador se utiliza para comparar la igualdad de valor y tipo en JavaScript?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 7
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se llama el objeto que representa la ventana del navegador en JavaScript?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la forma correcta de declarar una función en JavaScript?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué método se utiliza para agregar un elemento al final de un array en JavaScript?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // JavaScript Question 10
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el resultado de la expresión 2 + "2" en JavaScript?',
            'world_id'=>4,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 1
        DB::table('questions')->insert([
            'QuestionText' => 'Recorre este array clave valor para mostrarlo',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se crea una variable?',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 3
        DB::table('questions')->insert([
            'QuestionText' => 'Dime el resultado de: $x=5%2',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 4
        DB::table('questions')->insert([
            'QuestionText' => 'Pon $frase=”HOLA” en minúsculas',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 5
        DB::table('questions')->insert([
            'QuestionText' => 'Comenta la línea de código',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 6
        DB::table('questions')->insert([
            'QuestionText' => 'Concatena estas variables',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 7
        DB::table('questions')->insert([
            'QuestionText' => 'Cuenta el número de elementos del array',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué significa PHP?',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es una variable de Java?',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);

        // PHP Question 10
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es un string?',
            'world_id'=>3,
            'image'=>'QHTML9.PNG'
        ]);
    }
}

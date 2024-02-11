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
        ]);

        // Git Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se añaden archivos al área de preparación (staging area) en Git?',
        ]);

        // Git Question 3
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el comando para confirmar los cambios y escribir un mensaje de commit?',
        ]);

        // Git Question 4
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo deshacer los cambios locales y restaurar un archivo al estado del último commit?',
        ]);

        // Git Question 5
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la diferencia entre git pull y git fetch?',
        ]);

        // Git Question 6
        DB::table('questions')->insert([
            'QuestionText' => 'Comando para crear y cambiar a una nueva rama en Git.',
        ]);

        // Git Question 7
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo fusionar una rama específica con la rama actual en Git?',
        ]);

        // Git Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo reescribir la historia del repositorio Git utilizando la herramienta de rebase interactivo?',
        ]);

        // Git Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el propósito del comando git bisect y cómo se utiliza?',
        ]);

        // Git Question 10
        DB::table('questions')->insert([
            'QuestionText' => 'Explica el uso del comando git filter-branch y proporciona un ejemplo práctico de su aplicación.',
        ]);

        // HTML/CSS Question 1
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se escribe un párrafo en HTML?',
        ]);

        // HTML/CSS Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la etiqueta correcta para crear una lista numerada en HTML?',
        ]);

        // HTML/CSS Question 3
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se cierra una etiqueta?',
        ]);

        // HTML/CSS Question 4
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la función de la etiqueta <head> en un documento HTML?',
        ]);

        // HTML/CSS Question 5
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué hace la etiqueta <a> de HTML?',
        ]);

        // HTML/CSS Question 6
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es el margen?',
        ]);

        // HTML/CSS Question 7
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo puedes mostrar las letras de un párrafo en rojo?',
        ]);

        // HTML/CSS Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la propiedad para cambiar el tamaño de la letra?',
        ]);

        // HTML/CSS Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se aplica el margen de 10 píxeles a todos los lados de un elemento?',
        ]);

        // HTML/CSS Question 10
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo puedes el fondo de un botón a color negro y letras rojas?',
        ]);

        // Java Question 1
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es una variable de Java?',
        ]);

        // Java Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es un string?',
        ]);

        // Java Question 3
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se llama la acción de repetir un bloque de código varias veces en Java?',
        ]);

        // Java Question 4
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la sintaxis correcta para mostrar en la consola de Java?',
        ]);

        // Java Question 5
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el operador que se utiliza para comprobar si dos valores son diferentes?',
        ]);

        // Java Question 6
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué hace el siguiente código? int x = 10; if (x > 5) { System.out.println("¡Es mayor que 5!"); } else { System.out.println("No es mayor que 5."); }',
        ]);

        // Java Question 7
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué muestra este código? for (int i = 1; i <= 3; i++) { System.out.print(i + " "); }',
        ]);

        // Java Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué hace el siguiente código? String mensaje = “Hola”; System.out.println(mensaje.length());',
        ]);

        // Java Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué muestra el siguiente código? int a = 8; int b = 5; if (a > b) { System.out.println("a es mayor que b."); } else if (a < b) { System.out.println("a es menor que b."); } else { System.out.println("a y b son iguales."); }',
        ]);

        // Java Question 10
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué hace el siguiente código? for (int i = 0; i < 5; i++) { if (i % 2 == 0) { System.out.println(i); } }',
        ]);

        // JavaScript Question 1
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el significado de la sigla "JS"?',
        ]);

        // JavaScript Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se declara una variable en JavaScript utilizando la palabra clave let?',
        ]);

        // JavaScript Question 3
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la forma correcta de comentar múltiples líneas en JavaScript?',
        ]);

        // JavaScript Question 4
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál de los siguientes es un tipo de dato primitivo en JavaScript?',
        ]);

        // JavaScript Question 5
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la función que se utiliza para imprimir en la consola en JavaScript?',
        ]);

        // JavaScript Question 6
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué operador se utiliza para comparar la igualdad de valor y tipo en JavaScript?',
        ]);

        // JavaScript Question 7
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se llama el objeto que representa la ventana del navegador en JavaScript?',
        ]);

        // JavaScript Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es la forma correcta de declarar una función en JavaScript?',
        ]);

        // JavaScript Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué método se utiliza para agregar un elemento al final de un array en JavaScript?',
        ]);

        // JavaScript Question 10
        DB::table('questions')->insert([
            'QuestionText' => '¿Cuál es el resultado de la expresión 2 + "2" en JavaScript?',
        ]);

        // PHP Question 1
        DB::table('questions')->insert([
            'QuestionText' => 'Recorre este array clave valor para mostrarlo',
        ]);

        // PHP Question 2
        DB::table('questions')->insert([
            'QuestionText' => '¿Cómo se crea una variable?',
        ]);

        // PHP Question 3
        DB::table('questions')->insert([
            'QuestionText' => 'Dime el resultado de: $x=5%2',
        ]);

        // PHP Question 4
        DB::table('questions')->insert([
            'QuestionText' => 'Pon $frase=”HOLA” en minúsculas',
        ]);

        // PHP Question 5
        DB::table('questions')->insert([
            'QuestionText' => 'Comenta la línea de código',
        ]);

        // PHP Question 6
        DB::table('questions')->insert([
            'QuestionText' => 'Concatena estas variables',
        ]);

        // PHP Question 7
        DB::table('questions')->insert([
            'QuestionText' => 'Cuenta el número de elementos del array',
        ]);

        // PHP Question 8
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué significa PHP?',
        ]);

        // PHP Question 9
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es una variable de Java?',
        ]);

        // PHP Question 10
        DB::table('questions')->insert([
            'QuestionText' => '¿Qué es un string?',
        ]);
    }
}

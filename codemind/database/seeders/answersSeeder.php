<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class answersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Git Question 1 Answers
        DB::table('answers')->insert([
            'question_id' => 1,
            'AnswerText' => 'git init',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'AnswerText' => 'git start',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'AnswerText' => 'git begin',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'AnswerText' => 'git create',
            'IsCorrect' => false,
        ]);

        // Git Question 2 Answers
        DB::table('answers')->insert([
            'question_id' => 2,
            'AnswerText' => 'git add',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'AnswerText' => 'git stage',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'AnswerText' => 'git commit',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'AnswerText' => 'git push',
            'IsCorrect' => false,
        ]);

        // Git Question 3 Answers
        DB::table('answers')->insert([
            'question_id' => 3,
            'AnswerText' => 'git log',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'AnswerText' => 'git commit',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'AnswerText' => 'git save',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'AnswerText' => 'git history',
            'IsCorrect' => false,
        ]);

        // Git Question 4 Answers
        DB::table('answers')->insert([
            'question_id' => 4,
            'AnswerText' => 'git reset',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 4,
            'AnswerText' => 'git undo',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 4,
            'AnswerText' => 'git revert',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 4,
            'AnswerText' => 'git delete',
            'IsCorrect' => false,
        ]);

        // Git Question 5 Answers
        DB::table('answers')->insert([
            'question_id' => 5,
            'AnswerText' => 'git pull obtiene cambios y los fusiona; git fetch obtiene cambios sin fusionarlos.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 5,
            'AnswerText' => 'Ambos comandos son iguales.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 5,
            'AnswerText' => 'git pull solo descarga cambios; git fetch fusiona los cambios.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 5,
            'AnswerText' => 'git sync',
            'IsCorrect' => false,
        ]);

        // Git Question 6 Answers
        DB::table('answers')->insert([
            'question_id' => 6,
            'AnswerText' => 'git branch',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 6,
            'AnswerText' => 'git new',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 6,
            'AnswerText' => 'git checkout -b',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 6,
            'AnswerText' => 'git add-branch',
            'IsCorrect' => false,
        ]);

        // Git Question 7 Answers
        DB::table('answers')->insert([
            'question_id' => 7,
            'AnswerText' => 'git merge branch-name',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 7,
            'AnswerText' => 'git join branch-name',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 7,
            'AnswerText' => 'git connect branch-name',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 7,
            'AnswerText' => 'git combine branch-name',
            'IsCorrect' => false,
        ]);

        // Git Question 8 Answers
        DB::table('answers')->insert([
            'question_id' => 8,
            'AnswerText' => 'git rebase -i',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 8,
            'AnswerText' => 'git renew',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 8,
            'AnswerText' => 'git modify',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 8,
            'AnswerText' => 'git restructure',
            'IsCorrect' => false,
        ]);

        // Git Question 9 Answers
        DB::table('answers')->insert([
            'question_id' => 9,
            'AnswerText' => 'Encontrar cambios en un commit; git bisect start, git bisect good, git bisect bad.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 9,
            'AnswerText' => 'Revertir cambios; git bisect revert.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 9,
            'AnswerText' => 'Fusionar ramas automáticamente; git bisect merge.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 9,
            'AnswerText' => 'Buscar palabras clave; git bisect search.',
            'IsCorrect' => false,
        ]);

        // Git Question 10 Answers
        DB::table('answers')->insert([
            'question_id' => 10,
            'AnswerText' => 'Cambiar el nombre de una rama; git filter-branch -m old-branch new-branch.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 10,
            'AnswerText' => 'Filtrar commits por fecha; git filter-branch --commit-filter.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 10,
            'AnswerText' => 'Revertir cambios en la rama principal; git filter-branch -reverse.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 10,
            'AnswerText' => 'Eliminar un archivo específico de todos los commits; git filter-branch --tree-filter \'rm filename\'.',
            'IsCorrect' => false,
        ]);

        // HTML/CSS Question 1 Answers
        DB::table('answers')->insert([
            'question_id' => 11, // Change with the actual question ID
            'AnswerText' => '<p>',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 11,
            'AnswerText' => '<parrafo>',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 11,
            'AnswerText' => '<paragraph>',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 11,
            'AnswerText' => '<p>',
            'IsCorrect' => true,
        ]);

        // HTML/CSS Question 2 Answers
        DB::table('answers')->insert([
            'question_id' => 12,
            'AnswerText' => '<list>',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 12,
            'AnswerText' => '<ol>',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 12,
            'AnswerText' => '<ul>',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 12,
            'AnswerText' => '<list>',
            'IsCorrect' => false,
        ]);

        // HTML/CSS Question 3 Answers
        DB::table('answers')->insert([
            'question_id' => 13,
            'AnswerText' => 'Con /, es decir, </>',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 13,
            'AnswerText' => 'No se cierran',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 13,
            'AnswerText' => 'Con ;',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 13,
            'AnswerText' => 'Con -',
            'IsCorrect' => false,
        ]);

        // HTML/CSS Question 4 Answers
        DB::table('answers')->insert([
            'question_id' => 14,
            'AnswerText' => 'Define el contenido principal de la página.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 14,
            'AnswerText' => 'Contiene metadatos, enlaces a hojas de estilo y script, entre otros.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 14,
            'AnswerText' => 'Representa una fila de celdas en una tabla.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 14,
            'AnswerText' => 'Define el título de la página.',
            'IsCorrect' => false,
        ]);

        // HTML/CSS Question 5 Answers
        DB::table('answers')->insert([
            'question_id' => 15,
            'AnswerText' => 'Define una imagen.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 15,
            'AnswerText' => 'Crea un área de texto editable.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 15,
            'AnswerText' => 'Permite crear enlaces o hipervínculos.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 15,
            'AnswerText' => 'Define un enlace a una hoja de estilo.',
            'IsCorrect' => false,
        ]);

        // HTML/CSS Question 6 Answers
        DB::table('answers')->insert([
            'question_id' => 16,
            'AnswerText' => 'El margen es el espacio que se encuentra a la izquierda de un elemento.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 16,
            'AnswerText' => 'El margen es el espacio que se encuentra fuera del borde de un elemento.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 16,
            'AnswerText' => 'El margen es el espacio que se encuentra arriba de un elemento.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 16,
            'AnswerText' => 'El margen es el espacio que se encuentra debajo de un elemento.',
            'IsCorrect' => false,
        ]);

        // HTML/CSS Question 7 Answers
        DB::table('answers')->insert([
            'question_id' => 17,
            'AnswerText' => 'p { color: red}',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 17,
            'AnswerText' => 'p {red}',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 17,
            'AnswerText' => 'p-color:red',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 17,
            'AnswerText' => 'p { background-color: red}',
            'IsCorrect' => false,
        ]);

        // HTML/CSS Question 8 Answers
        DB::table('answers')->insert([
            'question_id' => 18,
            'AnswerText' => 'text-size',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 18,
            'AnswerText' => 'font-size',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 18,
            'AnswerText' => 'size',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 18,
            'AnswerText' => 'text-style',
            'IsCorrect' => false,
        ]);

        // HTML/CSS Question 9 Answers
        DB::table('answers')->insert([
            'question_id' => 19,
            'AnswerText' => 'margin: 10;',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 19,
            'AnswerText' => 'margin: 10px;',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 19,
            'AnswerText' => 'padding: 10px;',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 19,
            'AnswerText' => 'padding: 10;',
            'IsCorrect' => false,
        ]);

        // HTML/CSS Question 10 Answers
        DB::table('answers')->insert([
            'question_id' => 20,
            'AnswerText' => 'button { color: red, font: black }',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 20,
            'AnswerText' => 'button { background-color: negro, color: rojo}',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 20,
            'AnswerText' => 'button { background-color: black, color: red}',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 20,
            'AnswerText' => 'button { color: red; background-color: black; }',
            'IsCorrect' => false,
        ]);
        // Java Question 1 Answers
        DB::table('answers')->insert([
            'question_id' => 21, // Change with the actual question ID
            'AnswerText' => 'Una variable es como una caja donde puedes guardar un número o una palabra.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 21,
            'AnswerText' => 'Una variable es un robot que realiza cálculos en tu programa.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 21,
            'AnswerText' => 'Una variable es un color que puedes elegir para resaltar tu código.',
            'IsCorrect' => false,
        ]);

        // Java Question 2 Answers
        DB::table('answers')->insert([
            'question_id' => 22,
            'AnswerText' => 'Una variable para sumar.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 22,
            'AnswerText' => 'Una palabra clave para declarar variables numéricas.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 22,
            'AnswerText' => 'Una secuencia de caracteres, como palabras o frases.',
            'IsCorrect' => true,
        ]);

        // Java Question 3 Answers
        DB::table('answers')->insert([
            'question_id' => 23,
            'AnswerText' => 'Saltar',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 23,
            'AnswerText' => 'Bucle',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 23,
            'AnswerText' => 'Girar',
            'IsCorrect' => false,
        ]);

        // Java Question 4 Answers
        DB::table('answers')->insert([
            'question_id' => 24,
            'AnswerText' => 'print("Hola");',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 24,
            'AnswerText' => 'log("Hola");',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 24,
            'AnswerText' => 'System.out.println("Hola");',
            'IsCorrect' => true,
        ]);

        // Java Question 5 Answers
        DB::table('answers')->insert([
            'question_id' => 25,
            'AnswerText' => '=',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 25,
            'AnswerText' => '>',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 25,
            'AnswerText' => '!=',
            'IsCorrect' => true,
        ]);

        // Java Question 6 Answers
        DB::table('answers')->insert([
            'question_id' => 26,
            'AnswerText' => 'Muestra “¡Es mayor que 5!”.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 26,
            'AnswerText' => 'Muestra “No es mayor que 5.”',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 26,
            'AnswerText' => 'No funciona.',
            'IsCorrect' => false,
        ]);

        // Java Question 7 Answers
        DB::table('answers')->insert([
            'question_id' => 27,
            'AnswerText' => '1 2 3',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 27,
            'AnswerText' => '3 2 1',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 27,
            'AnswerText' => '1 1 1',
            'IsCorrect' => false,
        ]);

        // Java Question 8 Answers
        DB::table('answers')->insert([
            'question_id' => 28,
            'AnswerText' => 'Muestra la palabra “Hola”.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 28,
            'AnswerText' => 'Muestra la longitud de la palabra “Hola”.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 28,
            'AnswerText' => 'Muestra “mensaje”.',
            'IsCorrect' => false,
        ]);

        // Java Question 9 Answers
        DB::table('answers')->insert([
            'question_id' => 29,
            'AnswerText' => 'a es mayor que b',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 29,
            'AnswerText' => 'a es menor que b',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 29,
            'AnswerText' => 'a y b son iguales',
            'IsCorrect' => false,
        ]);

        // Java Question 10 Answers
        DB::table('answers')->insert([
            'question_id' => 30,
            'AnswerText' => 'Muestra números pares del 0 al 4.',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 30,
            'AnswerText' => 'Muestra números impares del 0 al 4.',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 30,
            'AnswerText' => 'Muestra 1 2 3 4 5.',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 1 Answers
        DB::table('answers')->insert([
            'question_id' => 31, // Change with the actual question ID
            'AnswerText' => 'Java Standard',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 31,
            'AnswerText' => 'JavaScript',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 31,
            'AnswerText' => 'Just Style',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 31,
            'AnswerText' => 'Joint System',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 2 Answers
        DB::table('answers')->insert([
            'question_id' => 32,
            'AnswerText' => 'var x = 5;',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 32,
            'AnswerText' => 'const x = 5;',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 32,
            'AnswerText' => 'let x = 5;',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 32,
            'AnswerText' => 'int x = 5;',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 3 Answers
        DB::table('answers')->insert([
            'question_id' => 33,
            'AnswerText' => '// Comentario',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 33,
            'AnswerText' => '-- Comentario --',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 33,
            'AnswerText' => '/* Comentario */',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 33,
            'AnswerText' => '# Comentario #',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 4 Answers
        DB::table('answers')->insert([
            'question_id' => 34,
            'AnswerText' => 'Object',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 34,
            'AnswerText' => 'Array',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 34,
            'AnswerText' => 'String',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 34,
            'AnswerText' => 'Function',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 5 Answers
        DB::table('answers')->insert([
            'question_id' => 35,
            'AnswerText' => 'print()',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 35,
            'AnswerText' => 'console.log()',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 35,
            'AnswerText' => 'write()',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 35,
            'AnswerText' => 'display()',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 6 Answers
        DB::table('answers')->insert([
            'question_id' => 36,
            'AnswerText' => '==',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 36,
            'AnswerText' => '===',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 36,
            'AnswerText' => '=',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 36,
            'AnswerText' => '!=',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 7 Answers
        DB::table('answers')->insert([
            'question_id' => 37,
            'AnswerText' => 'browser',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 37,
            'AnswerText' => 'window',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 37,
            'AnswerText' => 'document',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 37,
            'AnswerText' => 'view',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 8 Answers
        DB::table('answers')->insert([
            'question_id' => 38,
            'AnswerText' => 'function = myFunction() {}',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 38,
            'AnswerText' => 'func myFunction() {}',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 38,
            'AnswerText' => 'function myFunction() {}',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 38,
            'AnswerText' => 'def myFunction() {}',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 9 Answers
        DB::table('answers')->insert([
            'question_id' => 39,
            'AnswerText' => 'push()',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 39,
            'AnswerText' => 'pop()',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 39,
            'AnswerText' => 'add()',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 39,
            'AnswerText' => 'insert()',
            'IsCorrect' => false,
        ]);

        // JavaScript Question 10 Answers
        DB::table('answers')->insert([
            'question_id' => 40,
            'AnswerText' => '4',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 40,
            'AnswerText' => '"22"',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 40,
            'AnswerText' => '22',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 40,
            'AnswerText' => 'Error',
            'IsCorrect' => false,
        ]);

        // PHP Question 1 Answers
        DB::table('answers')->insert([
            'question_id' => 41,
            'AnswerText' => 'echo',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 41,
            'AnswerText' => 'print',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 41,
            'AnswerText' => 'display',
            'IsCorrect' => false,
        ]);

        // PHP Question 2 Answers
        DB::table('answers')->insert([
            'question_id' => 42,
            'AnswerText' => '==',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 42,
            'AnswerText' => '===',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 42,
            'AnswerText' => '=',
            'IsCorrect' => false,
        ]);

        // PHP Question 3 Answers
        DB::table('answers')->insert([
            'question_id' => 43,
            'AnswerText' => 'for',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 43,
            'AnswerText' => 'foreach',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 43,
            'AnswerText' => 'ambas correctas',
            'IsCorrect' => true,
        ]);

        // PHP Question 4 Answers
        DB::table('answers')->insert([
            'question_id' => 44,
            'AnswerText' => '$var',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 44,
            'AnswerText' => 'let var',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 44,
            'AnswerText' => 'int var',
            'IsCorrect' => false,
        ]);

        // PHP Question 5 Answers
        DB::table('answers')->insert([
            'question_id' => 45,
            'AnswerText' => '2',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 45,
            'AnswerText' => '2.5',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 45,
            'AnswerText' => '1',
            'IsCorrect' => true,
        ]);

        // PHP Question 6 Answers
        DB::table('answers')->insert([
            'question_id' => 46,
            'AnswerText' => 'str_upper()',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 46,
            'AnswerText' => 'toLowerCase()',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 46,
            'AnswerText' => 'strtolower()',
            'IsCorrect' => true,
        ]);

        // PHP Question 7 Answers
        DB::table('answers')->insert([
            'question_id' => 47,
            'AnswerText' => '//',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 47,
            'AnswerText' => '<!-- >',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 47,
            'AnswerText' => '#',
            'IsCorrect' => false,
        ]);

        // PHP Question 8 Answers
        DB::table('answers')->insert([
            'question_id' => 48,
            'AnswerText' => '$var1.$var2',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 48,
            'AnswerText' => '$var1+$var2',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 48,
            'AnswerText' => '$var1 , $var2',
            'IsCorrect' => false,
        ]);

        // PHP Question 9 Answers
        DB::table('answers')->insert([
            'question_id' => 49,
            'AnswerText' => 'count()',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 49,
            'AnswerText' => 'array_lenght()',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 49,
            'AnswerText' => 'elements()',
            'IsCorrect' => false,
        ]);

        // PHP Question 10 Answers
        DB::table('answers')->insert([
            'question_id' => 50,
            'AnswerText' => 'Python Hypertext Processor',
            'IsCorrect' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 50,
            'AnswerText' => 'Personal Home Page',
            'IsCorrect' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 50,
            'AnswerText' => 'Public Hosting Platform',
            'IsCorrect' => false,
        ]);
    }
}

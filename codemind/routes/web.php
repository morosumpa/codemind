<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WorldController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('auth.dashboard');
})->middleware('auth');

Route::get('/question/{id}', [QuestionController::class, 'show'])->name('question');

Route::post('/question/{id}/saveUserAnswer',[AnswerController::class,'saveUserAnswer'])->name('saveUserAnswer');
Route::post('/question/checkAnswers/{id}',[AnswerController::class,'checkAnswers'])->name('checkAnswers');

Route::get('world/{id}',[WorldController::class,'show'])->name('world');
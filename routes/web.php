<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/', 'home')->name('home');
Route::view('/a-escola', 'a_escola')->name('a_escola');
Route::view('/estrutura', 'estrutura')->name('estrutura');
Route::view('/primeira-habilitacao', 'primeira_habilitacao')->name('primeira_habilitacao');
Route::view('/inclusao-de-categoria', 'inclusao_categoria')->name('inclusao_categoria');
Route::view('/reciclagem', 'reciclagem')->name('reciclagem');
Route::view('/pre-matricula', 'pre_matricula')->name('pre_matricula');
Route::view('/contato', 'contato')->name('contato');
Route::view('/area-do-aluno', 'area_aluno')->name('area_aluno');
Route::view('/treinamento', 'treinamento')->name('treinamento');

require __DIR__.'/auth.php';

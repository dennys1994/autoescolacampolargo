<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/a-escola', 'a_escola')->name('a_escola');
Route::view('/estrutura', 'estrutura')->name('estrutura');
Route::view('/primeira-habilitacao', 'primeira_habilitacao')->name('primeira_habilitacao');
Route::view('/inclusao-de-categoria', 'inclusao_categoria')->name('inclusao_categoria');
Route::view('/reciclagem', 'reciclagem')->name('reciclagem');
Route::view('/avaliacao', 'avaliacao')->name('avaliacao');
Route::view('/pre-matricula', 'pre_matricula')->name('pre_matricula');
Route::view('/contato', 'contato')->name('contato');
Route::view('/area-do-aluno', 'area_aluno')->name('area_aluno');

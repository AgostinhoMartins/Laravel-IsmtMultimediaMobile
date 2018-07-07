<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('aluno', 'Alunocontroller');
Route::resource('alunoinfo', 'Alunocontroller');
Route::resource('professor', 'Professorcontroller');
Route::resource('professorinfo', 'Professorcontroller');


Route::get('/', function () {
    return view('welcome');
});

<?php

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
    return view('home');
})->name('inicio');

Route::get('/editarPerfil', function () {
    return view('Escola/perfil');
})->name('inicio');
Route::get('/informacoes', function () {
    return view('Escola/informacoes');
})->name('inicio');
Route::get('/editarEscola', function () {
    return view('Escola/editar');
})->name('inicio');
Route::get('/editarResponsavel', function () {
    return view('Responsavel/editar');
})->name('inicio');
Route::get('/cadastroAnuncio', function () {
    return view('Anuncio/cadastro');
})->name('inicio');
Route::get('/login2', function () {
    return view('login');
});
Route::get('/docs', function () {
    return view('Informativo/docs');
})->name('docs');
Route::get('/escolher', function () {
    return view('Informativo/escolher');
})->name('escolher');
Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');


Auth::routes();


Route::get('/', [App\Http\Controllers\controllerEscola::class, 'index'])->name('indexContatos');
Route::get('/cadastro', [App\Http\Controllers\controllerEscola::class, 'create'])->name('novaEscola');
Route::post('/cadastro/novo', [App\Http\Controllers\controllerEscola::class, 'store'])->name('gravaNovaEscola');
Route::get('/escola/{id}', [App\Http\Controllers\controllerEscola::class, 'verEscola'])->name('verEscola');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

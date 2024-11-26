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

Route::get('/editarPerfil', function () {
    return view('Escola/perfil');
});
Route::get('/informacoes', function () {
    return view('Escola/informacoes');
});
Route::get('/editarEscola', function () {
    return view('Escola/editar');
});
Route::get('/editarResponsavel', function () {
    return view('Responsavel/editar');
});
Route::get('/cadastroAnuncio', function () {
    return view('Anuncio/cadastro');
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


Route::get('/', [App\Http\Controllers\controllerEscola::class, 'index'])->name('home');
Route::get('/cadastro', [App\Http\Controllers\controllerEscola::class, 'create'])->name('novaEscola');
Route::post('/cadastroEscola/novo', [App\Http\Controllers\controllerEscola::class, 'store'])->name('gravaNovaEscola');
Route::post('/cadastroResponsavel/novo', [App\Http\Controllers\controllerResponsavel::class, 'store'])->name('gravaNovoResponsavel');
Route::get('/escola/{id}', [App\Http\Controllers\controllerEscola::class, 'verEscola'])->name('verEscola');

Route::get('/login', function () {
    return view('login');
});
Route::post('/loginEscola', [App\Http\Controllers\Auth\EscolaLoginController::class, 'login'])->name('escola.login.submit');
Route::post('escola/logout', [App\Http\Controllers\Auth\EscolaLoginController::class, 'logout'])->name('escola.logout');

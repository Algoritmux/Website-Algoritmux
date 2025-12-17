<?php

use App\Http\Controllers\GrowthController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/metodologia', function () {
    return view('metodologia');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/obrigado', function () {
    return view('obrigado');
});

Route::get('/roas', function () {
    return view('roas');
});

Route::get('/materiais', function () {
    return view('materiais');
});

Route::get('/equipe', function () {
    return view('equipe');
});

Route::post('/enviar-email', [ContatoController::class, 'send'])->name('contact.enviarEmail');

// Route::get('/', [GrowthController::class, 'showindex'])->name('home');
// Route::get('/', [CasesController::class, 'index'])->name('home');





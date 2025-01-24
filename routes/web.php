<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     return view('site.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('site.index');

Route::get('/planos', [PlanoController::class, 'index'])->name('site.planos');

Route::get('/contatos', [ContatoController::class, 'index'])->name('site.contatos');
<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ConvenioEmpresaController;
use App\Http\Controllers\CredenciamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     return view('layout.main2');
// });

// Route::get('/404', [HomeController::class, 'error'])->name('site.error');

Route::get('/', [HomeController::class, 'index'])->name('site.index');

Route::get('/planos', [PlanoController::class, 'index'])->name('site.planos');

Route::get('/contatos', [ContatoController::class, 'index'])->name('site.contatos2');

Route::get('/para-empresas',[ConvenioEmpresaController::class, 'index'])->name('site.convenioempresa');

Route::get('/credenciamento',[CredenciamentoController::class, 'index'])->name('site.credenciamentos');
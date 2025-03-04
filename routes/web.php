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

Route::get('/plano-pet-inicial', [PlanoController::class, 'plano1'])->name('site.plano-1');

<<<<<<< Updated upstream
Route::get('/plano-pet-intermediario', [PlanoController::class, 'plano2'])->name('site.plano-2');

Route::get('/plano-pet-avancado', [PlanoController::class, 'plano3'])->name('site.plano-3');

Route::get('/plano-pet-inicial-sc', [PlanoController::class, 'plano1sc'])->name('site.plano-1-sc');

Route::get('/plano-pet-intermediario-sc', [PlanoController::class, 'plano2sc'])->name('site.plano-2-sc');

Route::get('/plano-3-avancado-sc', [PlanoController::class, 'plano3sc'])->name('site.plano-3-sc');

Route::get('/contatos', [ContatoController::class, 'index'])->name('site.contatos2');

Route::get('/para-empresas',[ConvenioEmpresaController::class, 'index'])->name('site.convenioempresa');

Route::get('/credenciamento',[CredenciamentoController::class, 'index'])->name('site.credenciamentos');
=======
Route::get('/contatos', [ContatoController::class, 'index'])->name('site.contatos2');
>>>>>>> Stashed changes

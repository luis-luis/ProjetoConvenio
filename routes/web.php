<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ConvenioEmpresaController;
use App\Http\Controllers\CredenciamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\TutorController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     return view('layout.main2');
// });

// Route::get('/404', [HomeController::class, 'error'])->name('site.error');

Route::get('/', [HomeController::class, 'index'])->name('site.index');

Route::get('/plano-pet-inicial', [PlanoController::class, 'plano1'])->name('site.plano-1');

Route::get('/plano-pet-intermediario', [PlanoController::class, 'plano2'])->name('site.plano-2');

Route::get('/plano-pet-avancado', [PlanoController::class, 'plano3'])->name('site.plano-3');

Route::get('/plano-pet-inicial-sc', [PlanoController::class, 'plano1sc'])->name('site.plano-1-sc');

Route::get('/plano-pet-intermediario-sc', [PlanoController::class, 'plano2sc'])->name('site.plano-2-sc');

Route::get('/plano-3-avancado-sc', [PlanoController::class, 'plano3sc'])->name('site.plano-3-sc');

Route::get('/contatos', [ContatoController::class, 'index'])->name('site.contatos2');

Route::get('/para-empresas',[ConvenioEmpresaController::class, 'index'])->name('site.convenioempresa');

Route::get('/credenciamento',[CredenciamentoController::class, 'index'])->name('site.credenciamentos');

Route::get('/download/{filename}', [DownloadController::class, 'downloadFile'])->name('file.download');

Route::get('/contratar-plano', [PagamentoController::class, 'contratarPlano'])->name('site.contratarplano');

Route::post('/pagamento', [PagamentoController::class, 'selecionarMetodo'])->name('pagamento');

// Auth Routes
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.perform');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

// Password reset routes
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// placeholder dashboads (implemente depois as controllers/views reais)
Route::get('/tutor/dashboard', function(){
	// TODO: replace with real controller/view for tutor dashboard
	return view('tutor.dashboard');
})->middleware(['auth', 'role:tutor'])->name('tutor.dashboard');

Route::get('tutor/pets', [TutorController::class, 'index'])->middleware(['auth', 'role:tutor'])->name('tutor.dashboards');

Route::get('tutor/pets', [TutorController::class, 'pets'])->middleware(['auth', 'role:tutor'])->name('tutor.pets');

Route::get('/credenciada/dashboard', function(){
	// TODO: replace with real controller/view for credenciada dashboard
	return view('auth.credenciada-dashboard');
})->middleware(['auth', 'role:credenciada'])->name('credenciada.dashboard');

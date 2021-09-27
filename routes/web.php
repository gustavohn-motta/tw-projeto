<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Saudacao;
use App\Http\Controllers\SiteController;
use App\Models\client as ModelsClient;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'Index'])->name('home');

Route::get('/Sobre', [SiteController::class, 'Sobre']);

Route::get('/Contato', [SiteController::class, 'Contato']);

Route::get('/Servico/{id}', [SiteController::class, 'Servico']);

Route::get('/Saudacao/{nome}', Saudacao::class);

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');

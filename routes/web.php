<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

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
//Route::view('/introduccion-a-blade','introduccion')->name('introduccion');
Route::view('/','Inicio.login')->name('login');
Route::post('/login', [InicioController::class, 'loginProccess']);
Route::get('/registrar',[InicioController::class, 'registrarProccess'])->name('registrar');
Route::post('/registrar', [InicioController::class, 'registrarPersonal']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});

Route::get('/criar/usuario',[LoginController::class,'create'])->name('criarusuario');

Route::post('/salvar/usuario',[LoginController::class,'save'])->name('salvarusuario');


Route::get('/login',[LoginController::class,'get'])->name('login');

Route::get('/login/usuario',[LoginController::class,'getusuario'])->name('loginusuario');

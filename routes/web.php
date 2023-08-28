<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeckController;


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


Route::get('/criar/usuario',[LoginController::class,'create'])->name('criarusuario');
Route::post('/salvar/usuario',[LoginController::class,'save'])->name('salvarusuario');
Route::get('/home',[DeckController::class,'index'])->name('home');
Route::get('/',[LoginController::class,'get'])->name('login');
Route::post('/login/usuario',[LoginController::class,'getusuario'])->name('loginusuario');
Route::get('/jogar/{id}',[DeckController::class,'jogar'])->name('jogar');
Route::get('/criar/deck',[DeckController::class,'create'])->name('criardeck');
Route::post('/gerar/deck',[DeckController::class,'store'])->name('gerardeck');
Route::delete('/deletar/deck/{id}',[DeckController::class,'destroy'])->name('deletardeck');

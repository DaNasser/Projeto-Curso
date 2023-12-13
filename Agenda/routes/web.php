<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\Tarefa;
use App\Http\Controllers\Auth\LoginController;



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

Auth::routes();

Route::get('/', [TarefaController::class, 'index'])->name('home');
Route::get('calendario', [TarefaController::class, 'index'])->name('calendario');

Route::get('criar',[TarefaController::class,'create'])->name('criar');
Route::post('store',[TarefaController::class,'store'])->name('store');


Route::get('logout',[LoginController::class,'construct'])->name('logout');
Route::get('editar/{id}',[TarefaController::class,'edit'])->name('editar');
Route::get('deletar/{id}',[TarefaController::class,'deletar'])->name('deletar');

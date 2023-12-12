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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('calendario', [TarefaController::class, 'index'])->name('home');

Route::get('criar/tarefa',[Controller::class,'tarefateste'])->name('tarefa');
Route::post('criar',[Controller::class,'tarefa'])->name('criar');
Route::get('logout',[LoginController::class,'construct'])->name('logout');

Route::get('editar/tarefa',[TarefaController::class,'edit'])->name('editar');
<?php

namespace App\Http\Controllers;
use App\Models\Tarefa;
use App\resources\views\auth;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
   
 public function index(){
    $tarefa  = tarefa::where('user_id',Auth()->user()->id);
  return view('calendario', compact('tarefa'));
 }

 public function create(){
    return view('');
   }
 public function store(Request $requer){
    $tarefa = new tarefa();
    $tarefa->nome = $requer->input('nome');
    $tarefa->data = $requer->input('data');
    $tarefa->user_id = Auth()->user()->id;
    $tarefa->save();

    
   }

public function edit($id){
    $tarefa = tarefa::find($id);
    return view('');
   }

public function update(Request $requer,$id){
    $tarefa =  tarefa::find($id);
    $tarefa->nome = $requer->input('nome');
    $tarefa->data = $requer->input('data');
    $tarefa->update();
    
   }

   public function deletar($id){
    $tarefa =  tarefa::find($id);
    $tarefa->delete();

   }

}

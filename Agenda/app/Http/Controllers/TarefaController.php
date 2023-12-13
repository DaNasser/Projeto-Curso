<?php

namespace App\Http\Controllers;
use App\Models\Tarefa;
use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
   
 public function index(){
   $tarefa  = tarefa::where('user_id',Auth()->user()->id)->get();
 
  return view('calendario', compact('tarefa'));
 }

 public function create(){
    return view('tarefa');
   }
 public function store(Request $requer){
   
    $tarefa = new tarefa();
    $tarefa->nome = $requer->input('nome');
    $tarefa->data = $requer->input('data');
    $tarefa->grau_de_prioridade = $requer->input('grau_de_prioridade');
    $tarefa->user_id = Auth()->user()->id;
    $tarefa->save();
    return redirect()->route('calendario');

   
    
   }

public function edit($id){
    $tarefa = tarefa::find($id);
    return view('editar');
   }

public function update(Request $requer,$id){
    $tarefa =  tarefa::find($id);
    $tarefa->nome = $requer->input('nome');
    $tarefa->data = $requer->input('data');
    $tarefa->grau_de_prioridade = $requer->input('grau_de_prioridade');
    $tarefa->update();
    
   }

   public function deletar($id){
    $tarefa =  tarefa::find($id);
    $tarefa->delete();
    return redirect("calendario")->with("danger","Deletado com sucesso");

   }
}

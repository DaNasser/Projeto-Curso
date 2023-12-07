<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Tarefa;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function criartarefa(){
        return view("calendario");
    }
    public function tarefa(Request $request){

        
        $tarefas = new Tarefa();
        $tarefas->nome = $request->input('nome');
        $tarefas->data = $request->input('data');
        $tarefas->save();
        return redirect("calendario") -> with("sucesso","Tarefa cadastrada com sucesso");


    }
}

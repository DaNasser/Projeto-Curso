<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function criartarefa(){
        return view("calendario");
    }
    public function tarefa(Request $request){

        
        $tarefa = new Tarefa();
        $tarefa->nome = $request->input("nome");
        $tarefa->data = $request->input("data");
        $tarefa->save();

    }
}

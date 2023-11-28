<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function criarendereco(){
        return view("welcome");
    }
    public function endereco(Request $request){

        
        $endereco = new Endereco();
        $endereco->cep = $request->input("cep");
        $endereco->rua = $request->input("rua");
        $endereco->bairro = $request->input("bairro");
        $endereco->cidade = $request->input("cidade");
        $endereco->uf = $request->input("uf");
        $endereco->save();
        
        $cliente = new Cliente();
        $cliente->nome = $request->input("nome");
        $cliente->email = $request->input("email");
        $cliente->telefone = $request->input("telefone");
        $cliente->endereco_id = $endereco->id;
        $cliente -> save();
        return redirect("lista") -> with("sucesso","Cadastrado com sucesso");

    }
}

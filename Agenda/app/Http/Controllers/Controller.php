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

    public function tarefa(){
        return view ('criar/tarefa');
    }
}

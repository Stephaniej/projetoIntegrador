<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class cadastroController extends Controller
{
    public function cadastro(Request $request) {

        if($request->isMethod('GET')) {
            return view('cadastro');
        }

        $novoUsuario = new Usuario();      // Processo de cadastro. (Aqui indica-se o model)
        $novoUsuario->nome = $request->nomeCompleto;   // ->(coluna do sql); $request->(nome no input)
        $novoUsuario->email = $request->Email;
        $novoUsuario->senha = $request->Senha;
        $resultado = $novoUsuario->save();

        return view('cadastro',["resultado"=>$resultado]); 
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Usuario;

class configuracoesController extends Controller
{

    public function visualizar () {
       return view('configuracoes');
    }

    public function deletarConta ($id) {

        $usuario = Usuarios::find($id);
        if($usuario != null) {        // Se Usuário existe
            $resultado = $usuario->delete();
            echo "<script> alert('Sua conta foi deletada !') </script>";
        } else {
            echo "<script> alert('Usuário não existe !') </script>";
        }
    }
}

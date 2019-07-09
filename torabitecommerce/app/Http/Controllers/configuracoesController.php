<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Usuario;

class configuracoesController extends Controller
{

    public function visualizar () {
       return view('configuracoes');
    }

    public function editar (Request $request, $id) {
        if($request->isMethod('GET')) {
            $usuario = Usuarios::find($id);
            return view('configuracoes');
        }

        $usuario = Usuarios::find($request->usuario_id); 
        $usuario->email = $request->emailConfirm;
        $usuario->senha = $request->novaSenha;
        $usuario->senha = $request->novaSenha2;
        $usuario->idioma = $request->idioma;
        $usuario->profissao = $request->profissao;

        // Precisa de lógica de confirmação do email e da nova senha

        $resultado = $usuario->save();

        return view('configuracoes',["resultado"=>$resultado,  "usuarios"=> $usuario]); 
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

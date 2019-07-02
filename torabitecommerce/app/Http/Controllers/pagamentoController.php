<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class pagamentoController extends Controller
{
    //
    // public function index(Request $request){
    //     if($request->isMethod('GET')){
    //         $todosAtores = Ator::all();
    //         return view('ator',["todosAtores"=>$todosAtores]);
    //     }

    // }


    public function create(Request $request){

        if($request->isMethod('GET')){
            return view('compraSucesso');
        }

        $novaCompra = new Compra();
        // $novaCompra->tipo_compra = $request->Anual;
        // $novaCompra->tipo_compra = $request->Mensal;
        $novaCompra->numero_cartao = $request->cardNumber;
        $novaCompra->numero_cvv = $request->cvvNumber;
        $novaCompra->mes_cartao = $request->select;
        $novaCompra->ano_cartao = $request->select2;
        $resultado = $novaCompra->save();

       
        return view('resultadoCompra',["resultado"=>$resultado]);
    }

    public function editar(Request $request, $id){
        if($request->isMethod('GET')){
            
            $ator = Ator::find($id);

            return view('editarAtor',["ator"=>$ator]);
        }

        $ator = Ator::find($request->ator_id);
        $ator->primeiro_nome = $request->primeiroNome;
        $ator->ultimo_nome = $request->segundoNome;
        $resultado = $ator->save();

        return view("editarAtor",["resultado"=>$resultado, "ator"=>$ator]);
    }
}

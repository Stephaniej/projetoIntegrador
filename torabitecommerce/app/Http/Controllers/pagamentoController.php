<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class pagamentoController extends Controller
{
    
    public function index(Request $request){
        if($request->isMethod('GET')){
            $pagamento = Pagamento::all();
            return view('pagamento',["pagamento"=>$pagamento]);
        }

    }


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
            
            $pagamento = Pagamento::find($id);

            return view('resultadoCompra',["pagamento"=>$pagamento]);
        }

        $pagamento = Pagamento::find($request->pagamento_id);
        $pagamento->produto_id = $request->produtoNome;
        $pagamento->preco = $request->produtoPreco;
        $resultado = $pagamento->save();

        return view("resultadoCompra",["resultado"=>$resultado, "pagamento"=>$pagamento]);
    }
}

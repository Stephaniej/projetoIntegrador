<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Pagamento;
use App\Produto;
use Illuminate\Http\Request;

class pagamentoController extends Controller
{

    public function pagamento(Request $request, $id)
    {
        $produto = Produto::find($id);

        return view('pagamento', ["produto" => $produto]);
    }


    public function createPagamento(Request $request)
    {

        $novaCompra = new Pagamento();
        // $novaCompra->tipo_compra = $request->Anual;
        // $novaCompra->tipo_compra = $request->Mensal;
        // $novaCompra->produto = $request-> //tipoproduto;
        //     $novaCompra->plano = $request-> //tipo de plano;
        // $novaCompra->pagamento_id = $primaryKey;
        $resultado = $novaCompra->save();
        return view('resultadoCompra', ["resultado" => $resultado]);
    }
}

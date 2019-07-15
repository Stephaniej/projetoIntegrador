<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class produtoController extends Controller
{
    public function visualizarProduto() {
        $produtos = \App\Produto::paginate(5);
        return view('produto.visualizar', compact('produtos')); // Pasta produto e file visualizar
    }

    public function adicionarProduto() {
        return view('produto.adicionar');
    }

    public function salvarProduto(Request $request) {
        \App\Produto::create($request->all());  // Requisição do model
        return redirect()->route('visualizar.produto');
    }

    public function editarProduto($id) {
        $produto = \App\Produto::find($id);
        return view('produto.editar', compact('produto'));
    }

    public function atualizarProduto(Request $request, $id) {
        \App\Produto::find($id)->update($request->all());
        return redirect()->route('visualizar.produto');
    }

    public function detalharProduto($id) {
        $produto = \App\Produto::find($id);
        return view('produto.detalhar', compact('produto'));
    }

    public function deletarProduto($id) {
        $produto = \App\Produto::find($id);
        $produto->delete();
        return redirect()->route('visualizar.produto');
    }
}

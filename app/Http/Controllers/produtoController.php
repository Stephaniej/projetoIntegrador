<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class produtoController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:admin');
    }
    public function visualizarProduto()
    {
        $produtos = \App\Produto::paginate(5);
        return view('produto.visualizar', compact('produtos')); // Pasta produto e file visualizar
    }

    public function adicionarProduto()
    {
        return view('produto.adicionar');
    }

    public function salvarProduto(Request $request)
    {

        $produto = new Produto();

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) { // Criando caminho para a imagem
            $nome = $request->file('imagem')->getClientOriginalName();           // Nome oficial do arquivo
            $path = $request->imagem->storeAs('public/imagens', $nome);          // armazena na pasta 'public/imagens'
            $urlBase = 'storage/imagens/'.$nome;   // Criando a url para ser salva no DB
        }

        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->imagem = $urlBase;
        $produto->save();

        return redirect()->route('visualizar.produto');
    }

    public function editarProduto($id)
    {
        $produto = \App\Produto::find($id);
        return view('produto.editar', compact('produto'));
    }

    public function atualizarProduto(Request $request, $id)
    {
        \App\Produto::find($id)->update($request->all());
        return redirect()->route('visualizar.produto');
    }

    public function detalharProduto($id)
    {
        $produto = \App\Produto::find($id);
        return view('produto.detalhar', compact('produto'));
    }

    public function deletarProduto($id)
    {
        $produto = \App\Produto::find($id);
        $produto->delete();
        return redirect()->route('visualizar.produto');
    }

    public function procurarProduto(Request $request)
    {
        $procurar = $request->get('nome');
        $resultado = Produto::where('nome', 'LIKE', '%' . $procurar . '%')->paginate(5);
        return view('produto.pesquisar', compact('resultado'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('normal.produtos.index', ['produtos' => $produtos]);
    }

    public function create(){
        return view('normal.produtos.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'nome' => 'required',
            'descricao' => 'required|min:3',
            'preco' => 'required|numeric'
        ]);

         // desta maneira voce adiciona automaticamente tudo que vier pra ca
        $requestData = $request->all();
        
        //se precisar criar alguma logica :
        // $requestData['nome'] = 'meu ovo';
        // $requestData['preco'] = $requestData['preco'] + 50;

        Produto::create($requestData);  // isso faz salvar
        
        toastr()->success('salvo com sucesso');  // mensagem de sucesso

        return redirect('produtos');  //redireciona para index do produto
    }

    public function edit($id){
        $produto = Produto::find($id);
        return view('normal.produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $requestData = $request->all();
        
        $produto = Produto::findOrFail($id);
        $produto->update($requestData);

        toastr()->success('Editado com sucesso');

        return redirect('produtos');
    }
}

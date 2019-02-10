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
         // desta maneira voce adiciona automaticamente tudo que vier pra ca
        $requestData = $request->all();
        
        //se precisar criar alguma logica :
        // $requestData['nome'] = 'meu ovo';
        // $requestData['preco'] = $requestData['preco'] + 50;

        Produto::create($requestData);  // isso faz salvar
        
        toastr()->success('salvo com sucesso');  // mensagem de sucesso

        return redirect('produtos');  //redireciona para index do produto
    }
}

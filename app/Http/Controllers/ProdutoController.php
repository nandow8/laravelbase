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
}

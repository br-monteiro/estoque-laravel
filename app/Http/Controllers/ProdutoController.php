<?php

namespace estoque\Http\Controllers;

use estoque\Produto;
use Request;
use estoque\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller
{
    
    /**
     * Action listar - usada para listar os produtos
     */
    public function listar()
    {
        $produtos = Produto::all();
        $data['produtos'] = $produtos;

        return view('produto.list')->with($data);
    }
    
    /**
     * Action visualizar - usada para visualizar os detalhes de um produto
     */
    public function visualizar()
    {
        $id = Request::route('id');
        $produto = Produto::find($id);
        if (empty($produto)) {
            return "Esse produto não existe!";
        }
        
        $data['produto'] = $produto;
        return view('produto.find_one')->with($data);
    }
}

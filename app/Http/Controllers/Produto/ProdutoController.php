<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index(){
        return view('Produto.index');
    }
    // Encaminha para Pagina de Formulario
    public function CadastarProduto(){
        return view('Produto.creat');
    }
    //Cadastrar Novo Produto
    public function Creat(Request $request){

        $NomeProduto = $request->NomeProduto;
        $CodigoBarra = $request->CodigoBarra;
        $PrecoProduto = $request->PrecoProduto;
        $qtdProduto = $request->qtdProduto;
        $NomeProduto = $request->NomeProduto;
        $CategoriaProduto = $request->CategoriaProduto;

        return view('Produto.creat');
    }
}

<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class ProdutoController extends Controller
{
    public function index(){
        return view('Produto.index');
    }
    // Encaminha para Pagina de Formulario
    public function CadastarProduto(){
        return view('Produto.create');
    }
    //Cadastrar Novo Produto
    public function Create(Request $request){

        $produto = new Produto();

        $produto->nome = $request->NomeProduto;
        $produto->codigo_barra = $request->CodigoBarra;
        $prod = $request->PrecoProduto;
        $produto = $request->NomeProduto;
        $produto = $request->descricao;
        $produto = $request->CategoriaProduto;
        $produto = $request->qtdProduto;

         // Curso::destroy(4);
        // $curso = new Curso();
        // $curso->nome = 'Enfermagem';
        // $curso->duracao = 5;
        // $curso->save();
        //  return Curso::all(); //returma um json comtudo do banco
        // return view('Cursos.index');


        return view('Produto.create');
    }
}

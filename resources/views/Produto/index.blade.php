@extends('layouts.app')

@section('Conteudo')
    <h1>Estoque</h1>
    {{-- link para Adicionar Novo Produto --}}
    <div class="raw text-right">
        <a href="/cadastro-produto" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-plus"></span> Novo Produto 
        </a>
    </div>
      {{-- listagem dos Produtos Estoque --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Preço</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>15$</td>
            <td class=" text-center"> 
                {{-- edita --}}
                <a href="#" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-pencil"></span> 
                </a> 
                {{-- Excluir --}}
                <a href="#" class="btn btn-danger btn-lg">
                    <span class="glyphicon glyphicon-trash"></span> 
                </a>
            </td>
          </tr>
          <tr>
        </tbody>
      </table>
@endsection


@extends('layouts.app')

@section('Conteudo')
    <h1 class="text-center">Novo Produto</h1>
{{-- formulario --}}
    <form action="" method="post">
        @csrf
        <div class="row"> 
            <div class="col-3"></div>
            <div class="col-8">
                <div class="form-group col-8" >
                    <label for="NomeProduto">Nome Produto</label>
                    <input type="text" class="form-control" id="NomeProduto" name="NomeProduto"  placeholder="Nome Produto" required>
                </div>
                <div class="form-group col-8" >
                    <label for="CodigoBarra">Código De Barra</label>
                    <input type="text" class="form-control" id="CodigoBarra" name="CodigoBarra"  placeholder="Código De Barra">
                </div>
                <div class="form-group col-8" >
                    <label for="PrecoProduto">Preço Do Produto</label>
                    <input type="text" class="form-control" id="PrecoProduto" name="PrecoProduto"  placeholder="Preço Do Produto" required>
                </div>
                <div class="form-group col-8" >
                    <label for="qtdProduto">Quantidade de Produto</label>
                    <input type="text" class="form-control" id="qtdProduto" name="qtdProduto"  placeholder="Quantidade de Produto" required>
                </div>
                <div class="form-group col-8">
                    <label for="CategoriaProduto">Categoria Produto</label>
                    <select class="form-control" id="CategoriaProduto" name="CategoriaProduto" required>
                        <option value="">Categoria Produto</option>
                        {{-- @foreach ($collection as $item)
                                <option value="{{$item->nome_categoria}}">Categoria Produto</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="form-group col-8" >
                    <label for="DescricaoProduto">Descrição do Produto</label>
                    <input type="text" class="form-control" id="DescricaoProduto" name="DescricaoProduto"  placeholder="DescricaoProduto" required>
                </div><br>
                <div class="form-group text-center">
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                    <button type="submit" class="btn btn-success">Cadastar</button>
                </div>
            </div>
        </div>
    </form>

@endsection


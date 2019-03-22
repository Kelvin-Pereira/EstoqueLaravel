<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//pagina inicial
Route::get('/', 'HomePage\HomePageController@index');

//Estoque
Route::get('/lista-produtos', 'Produto\ProdutoController@index'); //listagem de produto
Route::get('/cadastro-produto', 'Produto\ProdutoController@CadastarProduto'); // Formulario para cadastrar Novo Produto
Route::post('/Create', 'Produto\ProdutoController@Create'); //cadastrar Novo Produto

//---------------------------------------
//----    Modelo padrao para rotas   ----
//---------------------------------------
// $this::group(['prefix' => 'cargo'], function () {
//     $this::get('/index',        ['uses' => 'CargoController@index',   'as' => 'cargo.index']);
//     $this::get('/form',         ['uses' => 'CargoController@create',  'as' => 'cargo.create']);
//     $this::post('/store',       ['uses' => 'CargoController@store',   'as' => 'cargo.store']);
//     $this::get('/edit/{id}',    ['uses' => 'CargoController@edit',    'as' => 'cargo.edit']);
//     $this::get('/destroy/{id}', ['uses' => 'CargoController@destroy', 'as' => 'cargo.destroy']);
// });
// Exemplo dos actions dos formulario
// action=" {{ route('cargo.index')  }} "
// action=" {{ route('cargo.create')  }} "
// action=" {{ route('cargo.store')  }} "
// action=" {{ route('cargo.edit')  }} "
// action=" {{ route('cargo.destroy')  }} "
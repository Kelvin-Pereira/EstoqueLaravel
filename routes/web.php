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
Route::get('/Estoque', 'Produto\ProdutoController@index'); //listagem de produto
Route::get('/CadastarProduto', 'Produto\ProdutoController@CadastarProduto'); // Formulario para cadastrar Novo Produto
Route::post('/Creat', 'Produto\ProdutoController@Creat'); //cadastrar Novo Produto
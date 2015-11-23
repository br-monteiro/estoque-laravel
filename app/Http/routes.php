<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Rota de listagem de produto
 */
Route::get('/produtos', 'ProdutoController@listar');

/**
 * Rota de exbição de detalhes de apenas um produto
 */
Route::get(
    '/produtos/mostra/{id}',
    'ProdutoController@visualizar'
)
->where('id', '[0-9]+');

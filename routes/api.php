<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route original do LARAVEL comentada apenas para testar a ROUTE produto.
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::resource('categoria', 'CategoriaController');//Essa Route(rota).
Route::resource('produto', 'ProdutoController');//Essa Route(rota).
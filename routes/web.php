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

//Essa Route(rota) pega o endereço na raiz.
Route::get('/', function () {
    return view('welcome');//Inicializa o LARAVEL
});

 Route::resource('produto', 'ProdutoController');//Essa Route(rota).
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

Route::get('/', function () {
    return view('index');
});
Route::get('/sobre', "sobreController@sobre");
Route::post('/sobre', "sobreController@sobre");

Route::get('/pagamento', 'pagamentoController@pagamento');
Route::post('/pagamento','pagamentoController@createPagamento');


Route::get('/cadastro', 'cadastroController@cadastro');
Route::post('/cadastro',"cadastroController@cadastro");

Route::get('usuario/editar/{id}', "configuracoesController@editar");
Route::post('usuario/editar/{id}',"configuracoesController@editar");

Route::get('/configuracoes', 'configuracoesController@visualizar');
Route::delete('/configuracoes', 'configuracoesController@deletarConta');

Route::get('/contato', 'contatoController@contato');
Route::post('/contato',"contatoController@contato");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

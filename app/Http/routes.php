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

Route::get('/gerar-proposta/{id}', [
    'as' => 'gerar-proposta', 'uses' => 'PropostaController@index'
]);

Route::post('/salvar-template-texto', [
    'as' => 'salvar-template-texto', 'uses' => 'TemplateTextoController@salvar'
]);

Route::post('/atualizar-template-texto', [
    'as' => 'atualizar-template-texto', 'uses' => 'TemplateTextoController@atualizar'
]);

Route::post('/get-propostas-from-texto', [
    'as' => 'get-propostas-from-texto', 'uses' => 'TemplateTextoController@getPropostas'
]);

Route::post('/salvar-template-tabela', [
    'as' => 'salvar-template-tabela', 'uses' => 'TemplateTabelaController@salvar'
]);

Route::get('/{name?}', [
    'as' => 'page', 'uses' => 'PageController@showPage'
]);

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/gerar-proposta-servico', function () {
//     return view('templates.gerar-proposta-servico');
// });

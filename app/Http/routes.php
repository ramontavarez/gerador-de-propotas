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

Route::get('/{name?}', [
    'as' => 'page', 'uses' => 'PageController@showPage'
]);

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/gerar-proposta-servico', function () {
//     return view('templates.gerar-proposta-servico');
// });

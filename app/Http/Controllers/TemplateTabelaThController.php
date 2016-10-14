<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TemplateTabelaTh;
use App\TemplateTabela;

class TemplateTabelaThController extends Controller
{
    public function salvar(Request $request)
    {
    	$tabela = TemplateTabela::find($request->get('id'));
    	$tabela->th()->save([
    		'nome' => $request->get('nome'),
    		'tipo' => $request->get('tipo')
    		]);
    	return redirect()->route('page', ['templates-tabela'])->with('success', 'Campo gravado com sucesso!');
    }
}

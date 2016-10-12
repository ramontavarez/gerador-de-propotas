<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TemplateTabela;

class TemplateTabelaController extends Controller
{
    public function salvar(Request $request) {
    	TemplateTabela::create($request->all());
    	return redirect()->route('page', ['templates-tabela'])->with('success', 'Novo template criado com sucesso!');
	}
}

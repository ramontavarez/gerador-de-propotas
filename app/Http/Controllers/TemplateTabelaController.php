<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TemplateTabela;

class TemplateTabelaController extends Controller
{
    public function salvar(Request $request) {
    	$user = auth()->user();
    	$request->merge(['user_id' => $user->id]);

    	TemplateTabela::create($request->all());
    	return redirect()->route('page', ['templates-tabela'])->with('success', 'Novo template criado com sucesso!');
	}

	public function getTabela(Request $request) {
		$tabela = TemplateTabela::find($request->get('id'));
		return json_encode([$tabela, $tabela->propostas()->get(), $tabela->th()->get()]);
	}

	public function deleteTabela(Request $request) {
		$tabela = TemplateTabela::find($request->get('id'))->delete();
		return json_encode($tabela);
	}

	public function atualizar(Request $request) {
		$tabela = TemplateTabela::find($request->get('id'));
		$tabela->update($request->all());

		empty($request->get('mid')) ? $mid = [] : $mid = $request->get('mid');
		$tabela->propostas()->sync($mid);

		return json_encode($tabela);
	}
}

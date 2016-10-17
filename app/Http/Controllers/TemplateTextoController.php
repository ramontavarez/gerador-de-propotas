<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TemplateTexto;
use App\MidTextoProposta;

class TemplateTextoController extends Controller
{
    public function salvar(Request $request) {
    	TemplateTexto::create($request->all());
    	return redirect()->route('page', ['templates-texto'])->with('success', 'Texto gravado com sucesso!');
    	// return view('templates.templates-texto')->with('newsletter', 'Obrigado por se cadastrar!');
	}

	public function atualizar(Request $request) {
		$texto = TemplateTexto::find($request->get('id'));
		$texto->update($request->all());

		empty($request->get('mid')) ? $mid = [] : $mid = $request->get('mid');
		$texto->propostas()->sync($mid);
		return json_encode($texto);
	}

	public function getPropostas(Request $request) {
		$texto = TemplateTexto::find($request->get('id'));
		
		// return json_encode($texto->propostas()->get());
		return json_encode([$texto, $texto->propostas()->get()]);
	}

}

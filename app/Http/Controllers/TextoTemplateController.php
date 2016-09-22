<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TextoTemplate;
use App\MidTextoProposta;

class TextoTemplateController extends Controller
{
    public function salvar(Request $request) {
    	
    	TextoTemplate::create($request->all());
    	return redirect()->route('page', ['templates-texto'])->with('success', 'Texto gravado com sucesso!');
    	// return view('templates.templates-texto')->with('newsletter', 'Obrigado por se cadastrar!');
	}

	public function atualizar(Request $request) {

		dd($request->all());

		MidTextoProposta::where('proposta_texto_id', $request->get('id'))
		->update(['deleted_at' => \Carbon\Carbon::now()]);

		if($request->get('mid') != "") {

			$mids = $request->get('mid');
			foreach($mids as $mid) {
				$searchMids = MidTextoProposta::where('proposta_id', $mid)->where('proposta_texto_id', $request->get('id'))->first();

				if(is_null($searchMids)) {

					MidTextoProposta::create([
					'proposta_id' => $mid,
					'proposta_texto_id' => $request->get('id')
					]);

				} else {
					MidTextoProposta::where('proposta_id', $mid)->where('proposta_texto_id', $request->get('id'))->update('deleted_at', null);
				}

			}

		}

		TextoTemplate::where('id', $request->get('id'))->update([
				'status' => $request->get('status'),
				'titulo' => $request->get('titulo'),
				'descricao' => $request->get('descricao'),
				'texto' => $request->get('texto'),
				]);

		return redirect()->route('page', ['templates-texto'])->with('success', 'Conteúdo atualizado com sucesso!');
		
	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposta;
use App\TemplateTexto;
use App\Http\Requests;

class PropostaController extends Controller
{
    public function index($id) {
    	$proposta = Proposta::where('id', $id)->first();
    	$templatesTexto = $proposta->textos()->where('status', 1)->get();
    	return view('templates.gerar-proposta', [
    		'proposta' => $proposta, 
    		'templatesTexto' => $templatesTexto
    		]);

    }

}

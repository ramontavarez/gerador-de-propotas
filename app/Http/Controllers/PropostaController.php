<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposta;
use App\Http\Requests;

class PropostaController extends Controller
{
    public function index($id) {
    	$proposta = Proposta::where('id', $id)->first();
    	return view('templates.gerar-proposta', ['proposta' => $proposta]);

    }

}

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
    	$th = $tabela->th()->create($request->all());

    	if(!empty($request->get('opcoes'))) {
            $opcoes = explode(',' , $request->get('opcoes'));
            foreach($opcoes as $value) {
                $td[] = $th->td()->create(['valor' => $value]);
            }

        }

        return json_encode($th);
    }

    public function getTh(Request $request) 
    {
        return TemplateTabelaTh::whereId($request->id)->first();
    }


}

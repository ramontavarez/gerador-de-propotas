<?php
use Illuminate\Support\Facades\Facade;
use App\Proposta;
use App\TemplateTabela;
use App\TemplateTabelaTd;
use App\TemplateTabelaTh;
use App\TemplateTexto;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

function getPropostasAtivas() {
    $user = auth()->user();
    return $user->propostas()->where('status', 1)->get();
}

function getTabelas() {
    $user = auth()->user();
    return TemplateTabela::where('user_id', $user->id)->get();
}

function translateTipoCampo($valor) {
    switch ($valor) {
        case 1:
            return 'Texto';
            break;
        case 2:
            return 'Select';
            break;
        case 3:
            return 'Moeda';
            break;
        default:
            return 'Indefinido';
            break;
    }
}
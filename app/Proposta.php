<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
	 protected $table = 'propostas';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'status', 'nome', 'user_id',
    ];

    public function textos()
    {
        return $this->belongsToMany('App\TemplateTexto', 'template_texto_proposta');
    }

    public function tabelas() 
    {
        return $this->belongsToMany('App\TemplateTabela', 'template_tabela_proposta');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateTabela extends Model
{
    protected $table = 'templates_tabela';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'status', 'titulo',
    ];

    public function th() {
    	return $this->hasMany('App\TemplateTabelaTh', 'template_tabela_id');
    }

    public function propostas() {
        return $this->belongsToMany('App\Proposta', 'template_tabela_proposta');
    }

}

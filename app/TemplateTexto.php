<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateTexto extends Model
{
    protected $table = 'templates_texto';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'status', 'titulo', 'descricao', 'texto', 'user_id'
    ];

    public function propostas()
    {
        return $this->belongsToMany('App\Proposta', 'template_texto_proposta');
    }
}

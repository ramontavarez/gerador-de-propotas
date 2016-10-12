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
    	return $this->belongsTo('App\TemplateTabelaTd', 'template_tabela_id');
    }

}

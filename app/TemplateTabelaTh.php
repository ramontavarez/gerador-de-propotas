<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateTabelaTh extends Model
{
    protected $table = 'templates_tabela_th';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'nome', 'tipo', 'template_tabela_id',
    ];


    public function td() {
    	return $this->hasMany('App\TemplateTabelaTd', 'template_tabela_th_id');
    }
}

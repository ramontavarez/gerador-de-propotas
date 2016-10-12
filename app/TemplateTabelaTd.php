<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateTabelaTd extends Model
{
    protected $table = 'templates_tabela_td';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'valor', 'template_tabela_th_id',
    ];


}

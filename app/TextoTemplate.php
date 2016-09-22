<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextoTemplate extends Model
{
    protected $table = 'proposta_texto';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'status', 'titulo', 'descricao', 'texto'
    ];
}

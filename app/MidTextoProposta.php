<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MidTextoProposta extends Model
{
    protected $table = 'mid_texto_proposta';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'proposta_id', 'proposta_texto_id'
    ];
}

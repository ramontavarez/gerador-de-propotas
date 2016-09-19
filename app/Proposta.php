<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
	 protected $table = 'proposta';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'status', 'nome', 'user_id',
    ];
}

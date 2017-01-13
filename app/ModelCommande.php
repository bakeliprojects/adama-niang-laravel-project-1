<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCommande extends Model
{
    protected $table = 'commandes';
	protected $fillable = [
        'commandeur',
        'nombre',
        'contact'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelVendeur extends Model
{
    protected $table = 'vendeur';
	protected $fillable = [
        'nom',
        'genre',
        'prix',
        'contact'
    ];
}



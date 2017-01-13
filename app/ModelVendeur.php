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

	public function commande()
	{
    	return $this->hasOne('App\Models\ModelCommande', 'editor');
	}


   	public function hasOne($related, $foreignKey = null, $localKey = null)
	{
    	$foreignKey = $foreignKey ?: $this->getForeignKey();
 
    	$instance = new $related;
 
    	$localKey = $localKey ?: $this->getKeyName();
 
    	return new HasOne($instance->newQuery(), $this, $instance->getTable().'.'.$foreignKey, $localKey);
	}


}



<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['project_id', 'name', 'slug', 'colpleted', 'description'];
 //funció que retornarà el projecte al que pertany la tasca
	public function project() {
	return $this->belongsTo('App\Project');}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //
    protected $fillable = ['nom'];

    public function llibres(){
    	return $this->hasMany('App\Llibre');
    }
}

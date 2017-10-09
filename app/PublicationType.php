<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationType extends Model
{
    protected $fillable->('type');

    public function publications() {
    	return $this->hasMany('App\Publication');
    }
}

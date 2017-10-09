<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{

    public $name = 'market_name';
    public $abbr = 'market_abbr';


    // associate with publications
    public function publications() {
    	return $this->hasMany('App\Publication');
    }
}

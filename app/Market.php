<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
	// $market->publication;
    public function publication() 
    {
    	return $this->hasMany(Publication::class);
    }
}

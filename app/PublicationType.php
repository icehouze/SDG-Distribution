<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationType extends Model
{
	// $publicationType->publication;
    public function publication() 
    {
    	return $this->hasMany(Publication::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['market_id', 'publication_type_id', 'year', 'print', 'cover'];

	// $publication->publication_type
    public function publicationType() 
    {
    	return $this->belongsTo(PublicationType::class);
    }

	// $publication->market
    public function market() 
    {
    	return $this->belongsTo(Market::class);
    }

	// format publication code
	public function publication_code() 
	{
		dd();
	}
    	

}

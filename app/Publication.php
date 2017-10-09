<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['market_id', 'publication_type_id', 'year', 'print', 'cover'];

	// get the publication type of the publication
    public function publicationTypes() {
    	return $this->belongsTo('App\PublicationType');
    }

	// get the market of the publication
    public function markets() {
    	return $this->belongsTo('App\Market');
    }
}

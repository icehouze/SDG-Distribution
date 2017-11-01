<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index() 
	    {
	    	$publications = Publication::with('market', 'publicationType')->get();
			return view('publications.index', ['publications' => $publications]);
	    }

    public function create()
		{
		    return view('publications.create');
		}
}

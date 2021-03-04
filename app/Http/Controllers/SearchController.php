<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\MovieController;
use App\Models\Movie;

class SearchController extends Controller
{

	/**
	*	This should be smart enough to determine if user searches for movies or actors or..
	*
	*	@param search $search The string we search for
	*/
    public function search(string $search)
    {
		$movie = new Movie;
		$results = $movie->search($search);		
		return view('movie.search', [
			'query'  => $search,
            'movies' => $results,
        ]);
	}
}

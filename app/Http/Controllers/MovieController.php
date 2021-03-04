<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
	/**
	*	Show movie details page
	*	@param App\Models\Movie $movie
	*/
    public function show(Movie $movie)
    {
    	return view('movie.profile', ['movie' => $movie]);
    }

}

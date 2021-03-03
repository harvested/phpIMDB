<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    
	/**
	* The user repository implementation.
	*
	* @var Movie
	*/
    protected $movie;


    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }


    public function show($id)
    {
    	$movie = $this->movie->find($id);

    	return view('movie.profile', ['movie' => $movie]);
    }

    

}

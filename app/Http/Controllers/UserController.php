<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;


class UserController extends Controller
{
	/**
	*	Mark a movie as seen (viewed)
	* 	@param int $movieId
	*/
    public function seen(int $movieId) 
    {
    	// TO be implemented
    }
}

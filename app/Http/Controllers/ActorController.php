<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
	/**
	*	Show actor profile page based on actor_id
	*/
	public function show(Actor $actor)
	{
	    return view('actor.profile', ['actor' => $actor]);
	}
}

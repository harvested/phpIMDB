<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
	public function show(Actor $actor)
	{
	    return view('actor.profile', ['actor' => $actor]);
	}
}

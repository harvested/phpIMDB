<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorsMovies extends Model
{
    use HasFactory;

    protected $primaryKey = 'actor_id';
}

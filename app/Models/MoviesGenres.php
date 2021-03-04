<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesGenres extends Model
{
    use HasFactory;

    protected $primaryKey = 'movie_id';
}

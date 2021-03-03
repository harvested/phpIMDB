<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var id
     */
    protected $primaryKey = 'actor_id';


    public function movies()
    {
        return $this->hasManyThrough(Movie::class, ActorsMovies::class);
    }
}

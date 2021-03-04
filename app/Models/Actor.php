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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'description',
    ];

    public function movies()
    {
        return $this->hasManyThrough(Movie::class, ActorsMovies::class);
    }

    public function bio()
    {
        return $this->description;
    }
}

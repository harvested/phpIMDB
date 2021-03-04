<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var id
     */
    protected $primaryKey = 'genre_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'genre',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class, MoviesGenres::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var id
     */
    protected $primaryKey = 'movie_id';

    public function genres()
    {
        return $this->hasMany(Genre::class, MoviesGenres::class);
    }

    /**
        Wrapper around the 'name' property.
        Nice way to avoid changing the DB model.
        Normally movies have have "titles" and not "names". 
        But since I don't want to change the DB model because sometimes that's not possible
        we can make wrappers around the properties of the model.
    */
    public function title()
    {
        return $this->name;
    }
    
    /**
    *   @param string $string
    *
    */
    public function search(string $string) 
    {
        return Movie::where('name', 'like', "%$string%")->get();  
    }

    public function seen()
    {
        var_dump('here');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_genres', function (Blueprint $table) {
            $table->bigInteger('movie_id');
            $table->bigInteger('genre_id');
            $table->timestamps();
            // create foreign key constraints
            $table->foreign('movie_id')
                  ->references('movie_id')
                  ->on('movies')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('genre_id')
                  ->references('genre_id')
                  ->on('genres')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            // create a composite primary key and index it
            $table->primary(['movie_id', 'genre_id']);
            $table->index(['movie_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_genres');
    }
}

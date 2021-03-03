<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorsMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors_movies', function (Blueprint $table) {
            $table->bigInteger('actor_id');
            $table->bigInteger('movie_id');
            $table->timestamps();
            // create foreign key constraints
            $table->foreign('actor_id')
                  ->references('actor_id')
                  ->on('actors')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('movie_id')
                  ->references('movie_id')
                  ->on('movies')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');   
            // create a composite primary key and index it
            $table->primary(['actor_id', 'movie_id']);
            $table->index(['actor_id', 'movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors_movies');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Actor::factory()->count(10)->create();
    }
}

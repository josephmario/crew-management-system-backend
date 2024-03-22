<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CrewMember;

class CrewSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CrewMember::factory(30)->create();
    }

}

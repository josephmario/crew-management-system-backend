<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(User)
        // User::factory(10)->create();
        User::create([
            'name' => 'Joseph',
            'email' => 'Joseph@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Za',
            'email' => 'ZA@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        \App\Models\User::factory()->create([
//            'name' => 'Alex',
//            'email' => 'alex@alexbauman.io',
//            'password' => bcrypt('test123'),
//        ]);
        \App\Models\Recipe::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Created for Seeding data - no need in this version
       // factory(\App\User::class,20)->create();
       User::factory()
             ->count(20)
             ->create();
    }
}

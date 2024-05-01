<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'cars'],
            ['name' => 'travel'],
            ['name' => 'our city'],
            ['name' => 'Stalin'],
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Theme::factory(100)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Province;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            // CountrySeeder::class,
            // regionSeeder::class,
            // ProvincesSeeder::class,
            // TitleSeeder::class,
        ]);
        \App\Models\User::factory(100)->create();
        \App\Models\movie::factory()->count(30)->create();
    }
}

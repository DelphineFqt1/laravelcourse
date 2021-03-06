<?php

namespace Database\Seeders;

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
        // $this->call(ProductsTableSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(VenteSeeder::class);
        $this->call(PostSeeder::class);
        
    }
}

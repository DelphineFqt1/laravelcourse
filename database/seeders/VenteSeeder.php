<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Vente::factory()->count(5000)->create();
    }
}

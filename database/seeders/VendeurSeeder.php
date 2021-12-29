<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Vendeur::factory()->count(10)->create();
    }
}

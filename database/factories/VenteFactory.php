<?php

namespace Database\Factories;

use App\Models\Vente;
use Illuminate\Database\Eloquent\Factories\Factory;

class VenteFactory extends Factory
{

     /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Vente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->randomFloat(2, 0, 200),
            'user_id' => $this->faker->numberBetween(1, 500),
            'product_id' => $this->faker->numberBetween(1, 50),
            //'id_vendeur' => $this->faker->numberBetween(1, 10),
            'created_at' => now()
            //
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Product::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 0, 200),
            'stock' => $this->faker->randomNumber(),
            'image' => $this->faker->imageUrl(),
            'type' => $this->faker->randomElement(['Soda', 'Alcool', 'Nourriture']),
            'created_at' => now()
            //
        ];
    }
}

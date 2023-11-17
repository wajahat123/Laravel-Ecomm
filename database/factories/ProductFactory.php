<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $ProductName = "Product ". rand(1,100);
        return [
            //

            "name"=> $ProductName,   
            "quantity"=> rand(1,100),
            "slug" => Str::slug($ProductName).rand(100,1000),
            "price"=> $this->faker->randomDigit()
        ];
    }
}

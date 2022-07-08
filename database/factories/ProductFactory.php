<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [

        'admin_id'=>Admin::factory(),
        'category_id'=>Category::factory(),
        'name'=>$this->faker->name(),
        'price'=>$this->faker->numerify('####')
        ];
    }
}

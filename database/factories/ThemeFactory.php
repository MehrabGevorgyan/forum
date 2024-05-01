<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 4),
            'user_id' => rand(1, 10),
            'name' => $this->faker->text($maxNbChars = 56),
            'desc' => $this->faker->text($maxNbChars = 500),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['novel', 'historical', 'humor', 'horror', 'journal', 'mystery', 'math', 'romance', 'memoir']),
            'style' => $this->faker->randomElement(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark']),
        ];
    }
}

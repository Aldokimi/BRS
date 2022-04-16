<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $modle = Genre::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'title' => $this->faker->unique()->randomElement($array = array('novel', 'historical', 'humor', 'horror', 'journal', 'mystery', 'math', 'romance', 'memoir')),
            'title' => $this->faker->unique()->word(),
            'style' => $this->faker->randomElement(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark']),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tital' => $this->faker->title(),
            'author' => $this->faker->name(),
            'description' => $this->faker->text(),
            'released_at' => $this->faker->date(),
            'cover_image' => $this->faker->imageUrl(),
            'pages' => $this->faker->randomDigit(),
            'language_code' => $this->faker->languageCode(),
            'isbn' => $this->faker->isbn10(),
            'in_stock' => $this->faker->randomDigit(),
        ];
    }
}

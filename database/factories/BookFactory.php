<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $modle = Book::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
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

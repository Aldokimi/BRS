<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $modle = Borrow::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'book_id' => Book::all()->random()->id,
            'status' => $this->faker->randomElement(['PENDING', 'ACCEPTED', 'REJECTED', 'RETURNED']), 
            'request_processed_at' => $this->faker->date(),
            'request_managed_by'  => User::all()->random()->id,
            'deadline' => $this->faker->date(),
            'returned_at' => $this->faker->date(),
            'return_managed_by'  => User::all()->random()->id,
        ];
    }
}

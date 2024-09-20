<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::factory(),
            'user_id' => '2',
            'quantity' => round(rand(1,10))
        ];
    }
}

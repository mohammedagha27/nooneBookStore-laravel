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
            'name' => $this->faker->words(2, true),
            'publisher' => $this->faker->words(2, true),
            // 'price' => $this->faker->numberBetween(10, 700),
            'image' => $this->faker->imageUrl(),
            'file' => $this->faker->imageUrl(),
            'description' => $this->faker->text(),
            'published_at' => $this->faker->date(),
            'pagecount' => $this->faker->numberBetween(10, 700),
            'category_id' => $this->faker->numberBetween(1,3 ),
            'author_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}

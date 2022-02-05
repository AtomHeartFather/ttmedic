<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'text' => $this->faker->realText($maxNbChars = 300, $indexSize = 2),
            'likes' => $this->faker->numberBetween(1,20),
            'cover' => "https://via.placeholder.com/200x250.png",
            'created_at' => $this->faker->dateTimeBetween(),
        ];
    }
}

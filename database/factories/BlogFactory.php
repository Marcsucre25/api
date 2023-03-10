<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'autor' => $this->faker->name(),
            'titulo' => $this->faker->sentence(4),
            'contenido' => $this->faker->word(),
            'url' => $this->faker->domainName()

        ];
    }
}

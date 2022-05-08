<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
     
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, User::count()),
            'titulo' => $this->faker->name(),
            'autor' => $this->faker->sentence(),
            'year' => $this->faker->numberBetween(1900,2000),
            'puntaje' => $this->faker->numberBetween(1,10),
            'comentario' => $this->faker->paragraph()
        ];
    }
}

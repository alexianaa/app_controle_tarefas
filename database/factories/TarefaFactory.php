<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarefa>
 */
class TarefaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tarefa' => fake()->realText( 200,  2),
            'data_limite_conclusao' => fake()->dateTimeBetween('-1 week', '+1 week'),
            'user_id' => fake()->numberBetween(0,2),
        ];
    }
}

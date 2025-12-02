<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Animal;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{

    protected $model = Animal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $especies = ['Cão', 'Gato', 'Pássaro', 'Roedor', 'Réptil'];
        return [
            'user_id' => User::factory(), // Associa a um usuário criado pela factory de User
            'nome' => $this->faker->firstName,
            'especie' => $this->faker->randomElement($especies),
            'raca' => $this->faker->word(),
            'data_nascimento' => $this->faker->date('Y-m-d', '-3 years'),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'observacoes' => $this->faker->optional()->sentence(),
        ];
    }

}

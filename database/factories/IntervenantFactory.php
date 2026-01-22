<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Intervenant>
 */
class IntervenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_intervenant' => $this->faker->name(),
            'fonction' => $this->faker->jobTitle(),
            'facebook' => $this->faker->url(),
            'linkedin' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'publie' => $this->faker->boolean(),
            'categorie' => $this->faker->randomElement(['Conférencier', 'Animateur', 'Modérateur']),
            'photo' => $this->faker->imageUrl(200, 200, 'people', true),
        ];
    }
}

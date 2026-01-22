<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actualite>
 */
class ActualiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(),
            'contenu' => $this->faker->paragraphs(3, true),
            'categorie' => $this->faker->randomElement(['Cérémonie', 'Panel', 'Masterclass', 'Rencontrer B to B']),
            'tags' => implode(',', $this->faker->words(3)),
            'image' => $this->faker->imageUrl(640, 480, 'news', true),
            'is_published' => $this->faker->boolean(80), // 80% de chances d'être publié
        ];
    }
}

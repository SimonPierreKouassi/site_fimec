<?php

namespace Database\Factories;

use App\Models\Documentation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documentation>
 */
class DocumentationFactory extends Factory
{

    protected $model = Documentation::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_document' => $this->faker->word(),
            'annee_parution' => $this->faker->year(),
            'image_couverture' => $this->faker->imageUrl(200, 300, 'books', true),
            'fichier' => $this->faker->word() . '.pdf',
        ];
    }
}

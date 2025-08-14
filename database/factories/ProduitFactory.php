<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{Company, User};

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */

class ProduitFactory extends Factory
{
    protected $model = \App\Models\Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->word(),
            "price" => fake()->randomFloat(),
            "description" => fake()->paragraph(),
            "company_Id" => Company::factory(),
            "user_id" => User::factory(),
        ];
    }
}

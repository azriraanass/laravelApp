<?php

namespace Database\Seeders;

use App\Models;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Models\Produit::factory(10)->create();
        Models\Company::factory(5)->create();
        Models\User::factory(5)->create();
    }
}

<?php

    namespace Database\Seeders;

    use App\Models\Produit;
    use App\Models\Company;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            Produit::factory(20)->create();
            Company::factory(20)->create();
        }
    }

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UserSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FacilityCategorySeeder::class);
        $this->call(FacilitySeeder::class);
        $this->call(RecipeSeeder::class);
        $this->call(WebsiteInfoSeeder::class);
    }
}
<?php

namespace Database\Seeders;

use App\Models\RecipeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['name_ar' => 'المصرية التقليدية','name_en' => 'Traditional Egyptian'],
            ['name_ar' => 'المطبخ الفرنسي','name_en' => 'French Cuisine'],
            ['name_ar' => 'المطبخ الصيني','name_en' => 'Chinese Cuisine'],
        ];

        foreach($data as $d) {
            RecipeType::create($d);

        }

    }
}

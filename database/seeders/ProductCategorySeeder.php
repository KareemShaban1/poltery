<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['name_en' => 'Duck', 'name_ar' => 'بط', 'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Chicken', 'name_ar' => 'دجاج', 'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Quail', 'name_ar' => 'سمان', 'image' => '', 'updated_at' => Carbon::now()],
        ];

        ProductCategory::insert($data);
    }
}
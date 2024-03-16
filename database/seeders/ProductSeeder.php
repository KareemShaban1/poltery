<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['name_en' => 'Fresh Whole Duck','name_ar' => 'بطة كاملة طازجة','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Frozen Whole Duck','name_ar' => 'بطة كاملة مجمدة','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Hips','name_ar' => 'أوراك بط','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Breasts','name_ar' => 'صدور بط','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Liver','name_ar' => 'كبد بط','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Gizzard','name_ar' => 'قوانص بط','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Neck','name_ar' => 'رقبة بط','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Manhood','name_ar' => 'رجل بط','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Tongue','name_ar' => 'لسان بط','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Frozen Whole Chicken','name_ar' => 'فرخة كاملة مجمدة','category_id' => 2,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Chicken Paneer','name_ar' => 'بانير دجاج','category_id' => 2,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Chicken Hips','name_ar' => 'أوراك فراخ','category_id' => 1,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Fresh Whole Quail','name_ar' => 'سمان كامل طازج','category_id' => 3,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Quail Hips','name_ar' => 'أوراك سمان','category_id' => 3,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Quail Breasts','name_ar' => 'صدور سمان','category_id' => 3,'image' => '', 'updated_at' => Carbon::now()],
            ['name_en' => 'Quail eggs','name_ar' => 'بيض سمان','category_id' => 3,'image' => '', 'updated_at' => Carbon::now()],

        ];

        Product::insert($data);
    }
}
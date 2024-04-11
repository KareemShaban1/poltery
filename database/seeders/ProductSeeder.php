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
            ['name_en' => 'Fresh Whole Duck','name_ar' => 'بطة كاملة طازجة','category_id' => 1,'image' => '/1710600231.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Frozen Whole Duck','name_ar' => 'بطة كاملة مجمدة','category_id' => 1,'image' => '/1710600295.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Hips','name_ar' => 'أوراك بط','category_id' => 1,'image' => '/1710600353.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Breasts','name_ar' => 'صدور بط','category_id' => 1,'image' => '/1710631042.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Liver','name_ar' => 'كبد بط','category_id' => 1,'image' => '/1710600439.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Gizzard','name_ar' => 'قوانص بط','category_id' => 1,'image' => '/1710600461.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Neck','name_ar' => 'رقبة بط','category_id' => 1,'image' => '/1710600513.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Manhood','name_ar' => 'رجل بط','category_id' => 1,'image' => '/1710600631.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Duck Tongue','name_ar' => 'لسان بط','category_id' => 1,'image' => '/1710600665.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Frozen Whole Chicken','name_ar' => 'فرخة كاملة مجمدة','category_id' => 2,'image' => '/1710600920.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Chicken Breasts','name_ar' => 'بانير دجاج','category_id' => 2,'image' => '/1710601531.png', 'updated_at' => Carbon::now()],
            ['name_en' => 'Chicken Hips','name_ar' => 'أوراك فراخ','category_id' => 1,'image' => '/1710600933.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Fresh Whole Quail','name_ar' => 'سمان كامل طازج','category_id' => 3,'image' => '/1710600981.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Quail Hips','name_ar' => 'أوراك سمان','category_id' => 3,'image' => '/1710600998.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Quail Breasts','name_ar' => 'صدور سمان','category_id' => 3,'image' => '/1710601013.jpg', 'updated_at' => Carbon::now()],
            ['name_en' => 'Quail Eggs','name_ar' => 'بيض سمان','category_id' => 3,'image' => '/1710601046.jpg', 'updated_at' => Carbon::now()],

        ];

        Product::insert($data);
    }
}

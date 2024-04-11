<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['title' => 'feed mill','product_id' => null ,'recipe_id' => null,'facility_id' => 2 , 'image' => '/1710623891.jpg','type' => 'facility_image'],
            ['title' => 'incubation lab','product_id' => null ,'recipe_id' => null,'facility_id' => 3 , 'image' => '/1710624061.jpg','type' => 'facility_image'],
            ['title' => 'farms','product_id' => null ,'recipe_id' => null,'facility_id' => 4 , 'image' => '/1710624747.jpg','type' => 'facility_image'],
            ['title' => 'processing plant','product_id' => null ,'recipe_id' => null,'facility_id' => 5 , 'image' => '/1710624939.jpg','type' => 'facility_image'],
            ['title' => 'Home BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711984641.jpg','type' => 'main_image'],
            ['title' => 'About BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711984887.jpg','type' => 'main_image'],
            ['title' => 'Facilities BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711985343.jpg','type' => 'main_image'],
            ['title' => 'Products BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711985363.jpg','type' => 'main_image'],
            ['title' => 'Recipes BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711985612.jpg','type' => 'main_image'],
            ['title' => 'Contact BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711985765.jpg','type' => 'main_image'],
            ['title' => 'Home Mob BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711986254.jpg','type' => 'main_image'],
            ['title' => 'About Mob BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711986274.jpg','type' => 'main_image'],
            ['title' => 'Facilities Mob BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711986295.jpg','type' => 'main_image'],
            ['title' => 'Products Mob BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711986319.jpg','type' => 'main_image'],
            ['title' => 'Recipes Mob BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711986337.jpg','type' => 'main_image'],
            ['title' => 'Contact Mob BG','product_id' => null ,'recipe_id' => null,'facility_id' => null , 'image' => '/1711986379.jpg','type' => 'main_image'],

        ];
        foreach($data as $d) {
            Image::create($d);
        }
    }

}

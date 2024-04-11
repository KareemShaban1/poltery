<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['name_en' => 'carrefour','name_ar' => 'كارفور', 'image' => '/1710560947.png'],
['name_en' => 'awlad ragab','name_ar' => 'اولاد رجب','image' => '/1710594674.png'],
['name_en' => 'fathalla','name_ar' => 'فتح الله', 'image' => '/1710594733.png'],
['name_en' => 'othaim','name_ar' => 'العثيم', 'image' => '/1710594819.png'],
['name_en' => 'seoudi','name_ar' => 'سعودى', 'image' => '/1710595088.png'],
['name_en' => 'hyper one','name_ar' => 'هايبر وان','image' => '/1710595157.png'],
['name_en' => 'kher zman','name_ar' => 'خير زمان', 'image' => '/1710595220.png'],
['name_en' => 'Metro','name_ar' => 'مترو', 'image' => '/1710595255.png'],
['name_en' => 'Bim','name_ar' => 'بيم', 'image' => '/1710595296.png'],
['name_en' => 'كازيون','name_ar' => 'كازيون','image' => '/1710595346.png'],
['name_en' => 'Gourmet','name_ar' => 'جورميه', 'image' => '/1710595448.png'],
['name_en' => 'fergany','name_ar' => 'الفرجانى', 'image' => '/1710595528.png'],
['name_en' => 'al rayah','name_ar' => 'الرايه', 'image' => '/1710595559.png'],
['name_en' => 'mahmal','name_ar' => 'المحمل', 'image' => '/1710595662.png'],
['name_en' => 'mahlawy','name_ar' => 'المحلاوى', 'image' => '/1710596053.png'],
['name_en' => 'lolo','name_ar' => 'لولو', 'image' => '/1710596101.png'],
['name_en' => 'panda','name_ar' => 'بانده','image' => '/1710596310.png'],
['name_en' => 'kher baldna','name_ar' => 'خير بلدنا', 'image' => '/1710596171.png'],
['name_en' => 'flamingo','name_ar' => 'فلامنجو', 'image' => '/1710596205.png'],
['name_en' => 'spinneys','name_ar' => 'سبينس', 'image' => '/1710596233.png'],
['name_en' => 'exception','name_ar' => 'اكسبشن', 'image' => '/1710596273.jpg'],
['name_en' => 'royal house','name_ar' => 'رويال هاوس','image' => '/1710596499.png'],
['name_en' => 'sun mall','name_ar' => 'صن مول','image' => '/1710596538.png'],
['name_en' => 'oscar','name_ar' => 'اوسكار','image' => '/1710596592.png'],
['name_en' => 'el far','name_ar' => 'الفار','image' => '/1710596611.png'],
['name_en' => 'A  Market','name_ar' => 'A  Market','image' => '/1711800230.jpg']

        ];

        foreach($data as $d) {
            Sponsor::create($d);
        }
    }

}

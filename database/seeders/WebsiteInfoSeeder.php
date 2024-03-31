<?php

namespace Database\Seeders;

use App\Models\WebsiteInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //
        //
        // Define the data you want to insert into the 'information' table
        $data = [
            [
                'key' => 'description',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'keywords',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'canonical_link',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'og:title',
                'value' => '=',
            ],

            [
                'key' => 'og:description',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],


            [
                'key' => 'og:url',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],

            [
                'key' => 'og:type',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],

            [
                'key' => 'og:site_name',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],

            [
                'key' => 'article:publisher',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'og:updated_time',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'og:image',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],

            [
                'key' => 'og:image:secure_url',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'og:image:width',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'og:image:height',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],

            [
                'key' => 'og:image:alt',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],

            [
                'key' => 'og:image:type',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],

            [
                'key' => 'article:published_time',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'article:modified_time',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'twitter:card',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'twitter:title',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'twitter:description',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'twitter:image',
                'value' => '', 'type' => 'seo', 'language' => '',
            ],
            [
                'key' => 'facebook_link',
                'value' => 'https://www.facebook.com/ElAbedDucks', 'type' => 'links', 'language' => '',
            ],
            [
                'key' => 'instagram_link',
                'value' => 'https://www.instagram.com/elabedducks', 'type' => 'links', 'language' => '',
            ],

            [
                'key' => 'youtube_link',
                'value' => 'https://www.youtube.com/channel/UC5K4jMzMk1i7yCxhny5UrTA', 'type' => 'links', 'language' => '',
            ],

            [
                'key' => 'home_video',
                'value' => 'https://youtu.be/i43raBmR_Ys', 'type' => 'links', 'language' => '',
            ],
            [
                'key' => 'Integrated Poultry Production Process',
                'value' => '',
                'type' => 'home_content', 'language' => 'english',
            ],
            [
                'key' => 'Customer Satisfaction',
                'value' => '', 'type' => 'home_content', 'language' => 'english',
            ],

            [
                'key' => 'Commitment to Excellence',
                'value' => '', 'type' => 'home_content', 'language' => 'english',
            ],

            [
                'key' => 'Quality Assurance',
                'value' => '', 'type' => 'home_content', 'language' => 'english',
            ],

            [
                'key' => 'Our Story',
                'value' => '', 'type' => 'about_content', 'language' => 'english',
            ],

            [
                'key' => 'Our Mission',
                'value' => '', 'type' => 'about_content', 'language' => 'english',
            ],

        ];


        foreach($data as $d) {
            WebsiteInfo::create($d);

        }

        // Insert data into the 'information' table
        // DB::table('website_info')->insert($data);
    }
}
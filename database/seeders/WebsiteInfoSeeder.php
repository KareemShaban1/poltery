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
                'key' => 'Integrated Poultry Production Process',
                'value' => '<span style="color: rgb(47, 49, 56); font-family: Merriweather; font-size: 16px; text-align: start;">At ElAbed Poultry, we take pride in our vertically integrated approach to production, which enables us to maintain strict quality control at every stage. From raising day-old parent stock at our specialized farms to hatching eggs in our state-of-the-art incubation laboratories, and breeding the ducklings at our commercial farms, we meticulously oversee every aspect of the production process. We even ensure the highest standards of nutrition by feeding our birds with specially formulated vegetarian products from ElAbed Feed Mill.</span>',
                'type' => 'home_content', 'language' => 'english',
            ],
            [
                'key' => 'Customer Satisfaction',
                'value' => '<span style="color: rgb(47, 49, 56); font-family: Merriweather; font-size: 16px; text-align: start;">One of our core values is a commitment to meeting the diverse needs of our customers. Whether you are a local or international market, we strive to provide you with the finest poultry products that are both healthy and delicious. We understand that quality and freshness are paramount, and that is why we prioritize ethical practices in our operations. Our birds are slaughtered under Islamic ritual at ElAbed slaughterhouse, ensuring adherence to religious guidelines and providing our customers with peace of mind. All of our products are 100% Halal.</span>', 'type' => 'home_content', 'language' => 'english',
            ],
            [
                'key' => 'Quality Assurance',
                'value' => '<span style="color: rgb(47, 49, 56); font-family: Merriweather; font-size: 16px; text-align: start;">Choose ElAbed Poultry for unrivaled quality, trusted expertise, and a commitment to excellence. Experience the difference that comes from a company deeply rooted in its heritage, yet constantly evolving to meet the demands of the modern market.</span>', 'type' => 'home_content', 'language' => 'english',
            ],

            [
                'key' => 'Integrated Poultry Production Process',
                'value' => '',
                'type' => 'home_content', 'language' => 'arabic',
            ],
            [
                'key' => 'Customer Satisfaction',
                'value' => '', 'type' => 'home_content', 'language' => 'arabic',
            ],
            [
                'key' => 'Commitment to Excellence',
                'value' => '', 'type' => 'home_content', 'language' => 'arabic',
            ],

            [
                'key' => 'Quality Assurance',
                'value' => '', 'type' => 'home_content', 'language' => 'arabic',
            ],

            [
                'key' => 'Our Story',
                'value' => '', 'type' => 'about_content', 'language' => 'english',
            ],

            [
                'key' => 'Our Mission',
                'value' => '', 'type' => 'about_content', 'language' => 'english',
            ],



            [
                'key' => 'Our Story',
                'value' => '', 'type' => 'about_content', 'language' => 'arabic',
            ],

            [
                'key' => 'Our Mission',
                'value' => '', 'type' => 'about_content', 'language' => 'arabic',
            ],


            [
                'key' => 'ducks_counts',
                'value' => '<p>5000000</p>', 'type' => 'counts', 'language' => 'english',
            ],
            [
                'key' => 'quails_counts',
                'value' => '<p>9000000</p>', 'type' => 'counts', 'language' => 'english',
            ],
            [
                'key' => 'retails_counts',
                'value' => '<p>2000</p>', 'type' => 'counts', 'language' => 'english',
            ],
            [
                'key' => 'farms_counts',
                'value' => '<p>40</p>', 'type' => 'counts', 'language' => 'english',
            ],


            [
                'key' => 'ducks_counts',
                'value' => '<p>5000000</p>', 'type' => 'counts', 'language' => 'arabic',
            ],
            [
                'key' => 'quails_counts',
                'value' => '<p>9000000</p>', 'type' => 'counts', 'language' => 'arabic',
            ],
            [
                'key' => 'retails_counts',
                'value' => '<p>2000</p>', 'type' => 'counts', 'language' => 'arabic',
            ],
            [
                'key' => 'farms_counts',
                'value' => '<p>40</p>', 'type' => 'counts', 'language' => 'arabic',
            ],

            [
                'key' => 'contact_quote',
                'value' => '<p><span style="color: rgb(9, 68, 153); font-family: Merriweather; font-size: 16px; text-align: center;">Reach out for a personalized quote today!</span><br></p>', 'type' => 'counts', 'language' => 'english',
            ],

            [
                'key' => 'contact_quote',
                'value' => '<p><span style="color: rgb(9, 68, 153); font-family: Merriweather; font-size: 16px; text-align: center;">Reach out for a personalized quote today!</span><br></p>', 'type' => 'counts', 'language' => 'arabic',
            ],

        ];


        foreach($data as $d) {
            WebsiteInfo::create($d);

        }

        // Insert data into the 'information' table
        // DB::table('website_info')->insert($data);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Facility;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['name_en' => 'Breeders','name_ar' => 'مربي',
            'content_en' => 'Our parent stock is comprised of the finest pedigree selection of Pekin Ducks. Raised in climate controlled farms with ample floor space, our parent stock produces our entire commercial duck production.','content_ar' => 'يتكون مخزوننا الأصلي من أفضل مجموعة مختارة من Pekin Ducks. يتم تربية البط في مزارع يتم التحكم في مناخها بمساحة أرضية واسعة، وينتج مخزوننا الأصلي كامل إنتاجنا التجاري من البط.','image' => '/1710622044.jpg', 'updated_at' => Carbon::now()],

            ['name_en' => 'feed mill','name_ar' => 'مطحنة العلف',
            'content_en' => 'Our special, wholly vegetarian feed formulation ensures our poultry receive all the necessary levels of nutrients, vitamins, and minerals for every developmental stage in their lives.','content_ar' => 'تركيبة الأعلاف النباتية الخاصة بنا تضمن حصول دواجننا على جميع المستويات الضرورية من العناصر الغذائية والفيتامينات والمعادن لكل مرحلة نمو في حياتهم.','image' => '/1710623574.jpg', 'updated_at' => Carbon::now()],

            ['name_en' => 'incubation lab','name_ar' => 'معمل الحضانة',
            'content_en' => 'With the latest in incubation and hatchery technology in the market, our incubation labs allow us the highest number of best quality ducklings.','content_ar' => 'مع أحدث تقنيات الحضانة والتفريخ في السوق، تتيح لنا معامل الحضانة لدينا أكبر عدد من فراخ البط ذات الجودة الأفضل.','image' => '/1710624047.jpg', 'updated_at' => Carbon::now()],

            ['name_en' => 'farms','name_ar' => 'مزارع',
            'content_en' => 'At our farms all our poultry is raised free range. Our poultry is antibiotic free, and receive no hormones nor any steroids . Nor are they force fed. Additionally, our farms are temperature controlled. Every measure is taken to ensure the healthiest product is produced.','content_ar' => 'في مزارعنا يتم تربية جميع الدواجن لدينا في نطاق حر. دواجننا خالية من المضادات الحيوية، ولا تتلقى أي هرمونات أو أي منشطات. ولا يتم إطعامهم بالقوة. بالإضافة إلى ذلك، يتم التحكم في درجة حرارة مزارعنا. يتم اتخاذ كل التدابير لضمان إنتاج المنتج الأكثر صحة.','image' => '/1710624731.jpg', 'updated_at' => Carbon::now()],

            ['name_en' => 'processing plant','name_ar' => 'مصنع المعالجة',
            'content_en' => 'Our slaughterhouse uses Halal slaughtering. El Abed has three separate slaughter lines; a dedicated line for quail with a 10,000 BPH capacity, and two 3,000 BPH lines for ducks and chicken.','content_ar' => 'يستخدم مسلخنا الذبح الحلال. العابد لديه ثلاثة خطوط ذبح منفصلة. خط مخصص للسمان بسعة 10000 برميل في الساعة، وخطين بطاقة 3000 برميل في الساعة للبط والدجاج.','image' => '/1710624912.jpg', 'updated_at' => Carbon::now()],

            ['name_en' => 'feather treatment','name_ar' => 'علاج الريش',
            'content_en' => 'Elabed Poultry is a reputable company that specializes in the sale of washed duck feathers. Committed to ethical practices and animal welfare, the company ensures that its feathers are obtained through humane methods and never plucked. They source their feathers from select duck farmers who prioritize the well-being of their animals. Only naturally molted feathers are collected, ensuring that no harm or distress is caused to the ducks. Elabed Poultry maintains strict quality control measures to deliver feathers of exceptional quality to its customers. The feathers undergo thorough washing and sterilization processes to ensure cleanliness and hygiene. The company also emphasizes sustainability and environmental responsibility by promoting the use of renewable resources and minimizing waste. By choosing Elabed Poultry, customers can support a company that values compassion, integrity, and environmental consciousness while receiving high-quality and ethically sourced washed duck feathers.',
            'content_ar' => 'العابد للدواجن هي شركة مرموقة متخصصة في بيع ريش البط المغسول. تلتزم الشركة بالممارسات الأخلاقية ورعاية الحيوان، وتضمن الحصول على ريشها بطرق إنسانية وعدم نتفه أبدًا. إنهم يحصلون على ريشهم من مزارعي البط المختارين الذين يعطون الأولوية لرفاهية حيواناتهم. يتم جمع الريش المنسلوخ بشكل طبيعي فقط، مما يضمن عدم حدوث أي ضرر أو إزعاج للبط. تحافظ شركة العابد للدواجن على إجراءات صارمة لمراقبة الجودة لتقديم ريش ذو جودة استثنائية لعملائها. ويخضع الريش لعمليات غسيل وتعقيم شاملة لضمان نظافته ونظافته. وتؤكد الشركة أيضًا على الاستدامة والمسؤولية البيئية من خلال تشجيع استخدام الموارد المتجددة وتقليل النفايات. من خلال اختيار العابد للدواجن، يمكن للعملاء دعم الشركة التي تقدر الرحمة والنزاهة والوعي البيئي بينما يحصلون على ريش بط مغسول عالي الجودة ومن مصادر أخلاقية.','image' => '/1710624967.jpg', 'updated_at' => Carbon::now()],


        ];
        Facility::insert($data);
    }
}

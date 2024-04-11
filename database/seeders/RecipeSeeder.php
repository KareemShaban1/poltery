<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['title_en' => 'Stuffed Duck and Potatoes','title_ar' => 'البط المحشو والبطاطس',
            'recipe_type_id' => 1,
            'description_en' => 'Stuffed duck has been a traditional recipe since the ancient Egyptians. At least that is what most of Egyptian housewives believe.',
            'description_ar' => 'البط المحشي وصفة تقليدية منذ القدماء المصريين. على الأقل هذا ما تعتقده معظم ربات البيوت المصريات.',
            'ingredients_en' => '
            * one large duck
            * crushed wheat or rice
            * cumin
            * Onion
            * salt and pepper
            * lemon
            * Tomato paste
            * one dozen small potatoes
            ',
            'ingredients_ar' => '
            * one large duck
            * crushed wheat or rice
            * cumin
            * Onion
            * salt and pepper
            * lemon
            * Tomato paste
            * one dozen small potatoes',
            'preparation_en' => 'Crushed rice wheat is washed in water and left to soak for a while. The duck is stuffed with the crushed rice wheat from behind. It is then plugged with a large onion and sewed tightly with a clean thread and needle. The sewing is very important, as it will not allow the rice/crushed wheat to escape from inside the duck.

            The stuffed duck is boiled in water until it is tender. It is preferred to add a lot of herbs to the stew as this gives a special taste to the duck. You can be creative with herbs but avoid spicy ones. Add cumin, onions, some salt and pepper.

            The stuffed duck is then placed on a pan and lemon juice is squeeze on it. Then tomato paste is spread on its back. The duck is placed in the oven on medium temperature. When the back is red the duck is taken out of the oven and left to cool for a minute. The stuffed crushed rice wheat can either be left inside of the duck or it can be taken out and placed around the duck in a serving plate.

            As a side dish you can prepare stuffed potatoes. Pick a dozen or more small potatoes (about the size of a golf ball each). The potatoes are peeled and hollowed out. They are then fried. Minced meat is cooked on a frying pan. The potatoes are stuffed with the cooked minced meat and placed in a deep pan. Tomato paste is then brushed on the surface and the pan of potatoes is placed in the oven for ten minutes.

            For salad you can prepare Egyptian green salad. Cut tomatoes, cucumbers, rocket, radish into medium pieces. Slice half an onion and add it to the salad. For seasoning, pour one tablespoon of vinegar and one tablespoon of olive oil in a cup and squeeze on it half of a small lemon. Add salt and pepper. Stir the seasoning and pour it on the salad. Toss the salad then spray it with cumin. Bon appetite or as Egyptians say, Bel hana wesh shefa (eat and be happy with good health).
            ',
            'preparation_ar' => 'Crushed rice wheat is washed in water and left to soak for a while. The duck is stuffed with the crushed rice wheat from behind. It is then plugged with a large onion and sewed tightly with a clean thread and needle. The sewing is very important, as it will not allow the rice/crushed wheat to escape from inside the duck.

            The stuffed duck is boiled in water until it is tender. It is preferred to add a lot of herbs to the stew as this gives a special taste to the duck. You can be creative with herbs but avoid spicy ones. Add cumin, onions, some salt and pepper.

            The stuffed duck is then placed on a pan and lemon juice is squeeze on it. Then tomato paste is spread on its back. The duck is placed in the oven on medium temperature. When the back is red the duck is taken out of the oven and left to cool for a minute. The stuffed crushed rice wheat can either be left inside of the duck or it can be taken out and placed around the duck in a serving plate.

            As a side dish you can prepare stuffed potatoes. Pick a dozen or more small potatoes (about the size of a golf ball each). The potatoes are peeled and hollowed out. They are then fried. Minced meat is cooked on a frying pan. The potatoes are stuffed with the cooked minced meat and placed in a deep pan. Tomato paste is then brushed on the surface and the pan of potatoes is placed in the oven for ten minutes.

            For salad you can prepare Egyptian green salad. Cut tomatoes, cucumbers, rocket, radish into medium pieces. Slice half an onion and add it to the salad. For seasoning, pour one tablespoon of vinegar and one tablespoon of olive oil in a cup and squeeze on it half of a small lemon. Add salt and pepper. Stir the seasoning and pour it on the salad. Toss the salad then spray it with cumin. Bon appetite or as Egyptians say, Bel hana wesh shefa (eat and be happy with good health).
            ',
            'image' => '', 'updated_at' => Carbon::now()],

            ['title_en' => 'Duck Confit (Confit De Canard)','title_ar' => 'Duck Confit (Confit De Canard)',
            'recipe_type_id' => 2,            'description_en' => 'This is the traditional confit de canard recipe. A classic confit de canard includes beautifully cured duck drumsticks cooked in duck fat until the meat starts to separate from the bone. Classically served with confit potatoes and fresh salad, the duck confit is a supremely tender and flavorful piece of meatatarian extravaganza.',
            'description_ar' => 'This is the traditional confit de canard recipe. A classic confit de canard includes beautifully cured duck drumsticks cooked in duck fat until the meat starts to separate from the bone. Classically served with confit potatoes and fresh salad, the duck confit is a supremely tender and flavorful piece of meatatarian extravaganza.',
            'ingredients_en' => '* sea salt
            * freshly cracked black pepper
             *4 duck legs (thigh and drumstick attached)
             *2 lb (1 kg) duck fat
            * 2 bay leaves
            * 4–6 sprigs of thyme
            ','ingredients_ar' => '* sea salt
            * freshly cracked black pepper
             *4 duck legs (thigh and drumstick attached)
             *2 lb (1 kg) duck fat
            * 2 bay leaves
            * 4–6 sprigs of thyme
            ',
            'preparation_en' => 'On to the flesh side of the drumsticks, rub a generous amount of sea salt and freshly cracked black pepper.

            Cover each drumstick with cling film and let it marinate in the refrigerator overnight.

            Once marinated, rinse the duck legs under cold water, then pat them dry with kitchen paper.

            In a large saucepan (large enough to keep a single layer of duck legs), melt the duck fat. The temperature of the fat should be around 210°F/100°C.

            Gently place the duck legs in the fat, along with a few sprigs of thyme and some bay leaves. When immersed, the duck legs should be completely covered with fat. Keep in mind that, as they cook, the legs will render even more fat.

            Cook the legs on very low heat for at least two hours until the meat starts separating from the bone. Make sure that the fat is not boiling at any point. A great way to make sure that the temperature is right is to cook the duck in the oven set to 210°F/100°C.

            To check if the duck has been cooked, transfer one drumstick onto a plate and, using a fork, see if the meat falls off the bone.

            In a large frying pan, sear the duck legs on both sides until they turn golden, and the skin becomes crispy.

            Serve with a fresh green salad and confit potatoes (cooked in previously used duck fat).

            ','preparation_ar' => 'On to the flesh side of the drumsticks, rub a generous amount of sea salt and freshly cracked black pepper.

            Cover each drumstick with cling film and let it marinate in the refrigerator overnight.

            Once marinated, rinse the duck legs under cold water, then pat them dry with kitchen paper.

            In a large saucepan (large enough to keep a single layer of duck legs), melt the duck fat. The temperature of the fat should be around 210°F/100°C.

            Gently place the duck legs in the fat, along with a few sprigs of thyme and some bay leaves. When immersed, the duck legs should be completely covered with fat. Keep in mind that, as they cook, the legs will render even more fat.

            Cook the legs on very low heat for at least two hours until the meat starts separating from the bone. Make sure that the fat is not boiling at any point. A great way to make sure that the temperature is right is to cook the duck in the oven set to 210°F/100°C.

            To check if the duck has been cooked, transfer one drumstick onto a plate and, using a fork, see if the meat falls off the bone.

            In a large frying pan, sear the duck legs on both sides until they turn golden, and the skin becomes crispy.

            Serve with a fresh green salad and confit potatoes (cooked in previously used duck fat).

            ',
            'image' => '', 'updated_at' => Carbon::now()],

            ['title_en' => 'Roasted Braised Duck','title_ar' => 'بط مشوي مطهو ببطء',
            'recipe_type_id' => 3,
            'description_en' => 'This roasted braised duck recipe is so good. With a few special ingredients and a little time, you’ll have an amazing, special dinner on your hands.',
            'description_ar' => 'This roasted braised duck recipe is so good. With a few special ingredients and a little time, you’ll have an amazing, special dinner on your hands.',
            'ingredients_en' => '* 4-5 lb. duck (innards removed)
            * 1 tablespoon oil
            * 5 slices fresh ginger
            * 6 cloves garlic (peeled and smashed)
            * 1 tablespoon rock sugar (or regular sugar)
            * ½ cup Chinese cooking wine (Shaoxing wine)
            * 1 ½ tablespoons dark soy sauce
            * ¼ cup light soy sauce
            * 3 tablespoons rice vinegar
            * 3 star anise
            * 6 cloves
            * 3 bay leaves
            * 12 whole peppercorns
            * 4-5 pieces dried orange peel
            * 3-4 cups water
            * 1 teaspoon honey (mixed with 1 teaspoon warm water)
            ',
            'ingredients_ar' => '* 4-5 lb. duck (innards removed)
            * 1 tablespoon oil
            * 5 slices fresh ginger
            * 6 cloves garlic (peeled and smashed)
            * 1 tablespoon rock sugar (or regular sugar)
            * ½ cup Chinese cooking wine (Shaoxing wine)
            * 1 ½ tablespoons dark soy sauce
            * ¼ cup light soy sauce
            * 3 tablespoons rice vinegar
            * 3 star anise
            * 6 cloves
            * 3 bay leaves
            * 12 whole peppercorns
            * 4-5 pieces dried orange peel
            * 3-4 cups water
            * 1 teaspoon honey (mixed with 1 teaspoon warm water)
            ',
            'preparation_en' => 'Rinse the duck inside and out and thoroughly pat dry. Remove the tail. Heat 1 tablespoon oil in a wok over medium heat, and swirl it around to coat the wok.

            Lower the duck into the wok breast side down, and let the skin brown and crisp up slightly.

            Spoon the oil over the parts of the duck that aren’t touching the oil. You will end up with a lot more oil than you started with, as the fat renders out of the duck. Turn off the heat.

            In a large pot (big enough to accommodate the duck laying flat) over medium heat, add a tablespoon of the fat from the wok, and cook the ginger and garlic for about 1 minute. Stir in the rock sugar until it’s melted.

            Add the Shaoxing wine, dark soy sauce, light soy sauce, rice vinegar, star anise, cloves, bay leaves, whole peppercorns, dried orange peel, 3 cups water and the duck. The liquid should come up about halfway up the duck. Add a little more water as needed.

            Bring the liquid to a boil and reduce heat to low. Cover and simmer for 50-60 minutes, flipping the bird every 15 minutes to make sure it cooks evenly.

            Carefully lift the duck out and drain all the liquid from the cavity, Place the duck on a V-rack or roasting rack set on a baking sheet. breast side up. Brush the duck all over with honey water. Set aside and preheat the oven to 425 degrees.

            Roast the duck for 12-15 minutes, until the skin is crispy. Watch it closely to prevent burning. Take it out of the oven and let it rest for 10 minutes before carving. You can serve it just like that, or with some of the sauce left over in the pot.
            ',
            'preparation_ar' => 'Rinse the duck inside and out and thoroughly pat dry. Remove the tail. Heat 1 tablespoon oil in a wok over medium heat, and swirl it around to coat the wok.

            Lower the duck into the wok breast side down, and let the skin brown and crisp up slightly.

            Spoon the oil over the parts of the duck that aren’t touching the oil. You will end up with a lot more oil than you started with, as the fat renders out of the duck. Turn off the heat.

            In a large pot (big enough to accommodate the duck laying flat) over medium heat, add a tablespoon of the fat from the wok, and cook the ginger and garlic for about 1 minute. Stir in the rock sugar until it’s melted.

            Add the Shaoxing wine, dark soy sauce, light soy sauce, rice vinegar, star anise, cloves, bay leaves, whole peppercorns, dried orange peel, 3 cups water and the duck. The liquid should come up about halfway up the duck. Add a little more water as needed.

            Bring the liquid to a boil and reduce heat to low. Cover and simmer for 50-60 minutes, flipping the bird every 15 minutes to make sure it cooks evenly.

            Carefully lift the duck out and drain all the liquid from the cavity, Place the duck on a V-rack or roasting rack set on a baking sheet. breast side up. Brush the duck all over with honey water. Set aside and preheat the oven to 425 degrees.

            Roast the duck for 12-15 minutes, until the skin is crispy. Watch it closely to prevent burning. Take it out of the oven and let it rest for 10 minutes before carving. You can serve it just like that, or with some of the sauce left over in the pot.
            ',
            'image' => '', 'updated_at' => Carbon::now()],



        ];

        Recipe::insert($data);
    }
}

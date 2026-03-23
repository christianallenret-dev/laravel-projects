<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Spaghetti Carbonara',
                'difficulty' => 'medium',
                'time' => 30,
                'img_url' => 'https://www.simplyrecipes.com/thmb/0UeN5LhKq-ze3BcZJ7_Yp803T24=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Pasta-Carbonara-LEAD-1-c477cc25c7294cd9a3fc51ece176481f.jpg',
                'description' => 'A classic Italian pasta dish made with eggs, cheese, pancetta, and pepper.'
            ],
            [
                'name' => 'Scrambled Eggs',
                'difficulty' => 'easy',
                'time' => 10,
                'img_url' => 'https://i2.wp.com/www.downshiftology.com/wp-content/uploads/2025/03/Scrambled-Eggs-main.jpg',
                'description' => 'Soft and fluffy scrambled eggs, perfect for a quick breakfast.'
            ],
            [
                'name' => 'Beef Stew',
                'difficulty' => 'hard',
                'time' => 120,
                'img_url' => 'https://www.allrecipes.com/thmb/XkapTqFUR4U_fMMZQwgikkuoL-Q=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/RM-281995-ClassicHeartyBeefStew-ddmfs-3x4-6957-660344f4e4c8417fa6d1cf3175e0202c.jpg',
                'description' => 'A hearty stew with tender beef, vegetables, and rich broth.'
            ],
            [
                'name' => 'Caesar Salad',
                'difficulty' => 'easy',
                'time' => 15,
                'img_url' => 'https://cdn.loveandlemons.com/wp-content/uploads/2024/12/caesar-salad.jpg',
                'description' => 'Crisp romaine lettuce tossed with Caesar dressing, croutons, and cheese.'
            ],
            [
                'name' => 'Chicken Alfredo',
                'difficulty' => 'medium',
                'time' => 40,
                'img_url' => 'https://www.allrecipes.com/thmb/luST0dBrTHwpSALZRvCTGgdh_88=/0x512/filters:no_upscale():max_bytes(150000):strip_icc()/276725-creamy-chicken-alfredo-VAT-001-Beauty-4x3-c4b026db5cb349f4b8fd627c56f91a42.jpg',
                'description' => 'Creamy Alfredo pasta topped with juicy grilled chicken.'
            ],
            [
                'name' => 'Pancakes',
                'difficulty' => 'easy',
                'time' => 20,
                'img_url' => 'https://www.inspiredtaste.net/wp-content/uploads/2025/07/Pancake-Recipe-1.jpg',
                'description' => 'Fluffy pancakes served with syrup and butter.'
            ],
            [
                'name' => 'Beef Lasagna',
                'difficulty' => 'hard',
                'time' => 90,
                'img_url' => 'https://joyfoodsunshine.com/wp-content/uploads/2023/01/beef-lasagna-recipe-13.jpg',
                'description' => 'Layered pasta with beef, cheese, and rich tomato sauce.'
            ],
            [
                'name' => 'Grilled Cheese Sandwich',
                'difficulty' => 'easy',
                'time' => 10,
                'img_url' => 'https://www.allrecipes.com/thmb/pnEUcAXDg5GUJ77fUDzZp41NWkE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/AR-238891-Grilled-Cheese-Sandwich-beauty-4x3-362f705972e64a948b7ec547f7b2a831.jpg',
                'description' => 'Toasted sandwich with melted cheese inside.'
            ],
            [
                'name' => 'Chicken Curry',
                'difficulty' => 'medium',
                'time' => 50,
                'img_url' => 'https://cdn.sanity.io/images/f3knbc2s/production/120be357fc8541587d05dcfcfa347e1942684287-2500x1500.jpg?auto=format',
                'description' => 'Spicy and flavorful chicken curry cooked with aromatic spices.'
            ],
            [
                'name' => 'Chocolate Lava Cake',
                'difficulty' => 'hard',
                'time' => 35,
                'img_url' => 'https://images.getrecipekit.com/20250325120225-how-20to-20make-20chocolate-20molten-20lava-20cake-20in-20the-20microwave.png?width=650&quality=90&',
                'description' => 'A rich chocolate cake with a gooey molten center.'
            ],
        ];


        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}

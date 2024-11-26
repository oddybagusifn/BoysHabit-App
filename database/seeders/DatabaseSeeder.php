<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\ProductDetail;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'oddybagusifn_',
            'email' => 'oddybagus22@gmail.com',
            'password' => 'Touroroy220704',
        ]);

        DB::table('product_categories')->insert([
            ['parent_category_id' => 1,
            'category_name' => "Men"],
            ['parent_category_id' => 2,
            'category_name' => "Women"],
            ['parent_category_id' => 3,
            'category_name' => "Kids"],
            ['parent_category_id' => 4,
            'category_name' => "Tops"],
            ['parent_category_id' => 5,
            'category_name' => "Shoes"],
            ['parent_category_id' => 6,
            'category_name' => "Bags"],
            ['parent_category_id' => 7,
            'category_name' => "Accessories"]
        ]);

        DB::table('products')->insert([
            [
            'slug' => 'example',
            'category_id' => 1,
            'name' => 'Example',
            'description' => 'Example',
            'product_image' => "https://cdn.discordapp.com/attachments/1021081740242079825/1280816233763176490/product1.jpg?ex=66d97492&is=66d82312&hm=e381f0f18d98f82ba8aa0e62d8f10de26fd9021466f66a0d366dd29f8eceef64&",
            ],
            [
            'slug' => 'example_2',
            'category_id' => 2,
            'name' => 'Example2',
            'description' => 'Example',
            'product_image' => "https://cdn.discordapp.com/attachments/1021081740242079825/1280816233763176490/product1.jpg?ex=66d97492&is=66d82312&hm=e381f0f18d98f82ba8aa0e62d8f10de26fd9021466f66a0d366dd29f8eceef64&",
            ],
            [
            'slug' => 'example_3',
            'category_id' => 1,
            'name' => 'Example3',
            'description' => 'Example',
            'product_image' => "https://cdn.discordapp.com/attachments/1021081740242079825/1280816233763176490/product1.jpg?ex=66d97492&is=66d82312&hm=e381f0f18d98f82ba8aa0e62d8f10de26fd9021466f66a0d366dd29f8eceef64&",
            ],
            [
            'slug' => 'example_4',
            'category_id' => 2,
            'name' => 'Example4',
            'description' => 'Example',
            'product_image' => "https://cdn.discordapp.com/attachments/1021081740242079825/1280816233763176490/product1.jpg?ex=66d97492&is=66d82312&hm=e381f0f18d98f82ba8aa0e62d8f10de26fd9021466f66a0d366dd29f8eceef64&",
            ],
            [
                'slug' => 'example5',
                'category_id' => 5,
                'name' => 'Example5',
                'description' => 'Example',
                'product_image' => "https://cdn.discordapp.com/attachments/1021081740242079825/1280816233763176490/product1.jpg?ex=66d97492&is=66d82312&hm=e381f0f18d98f82ba8aa0e62d8f10de26fd9021466f66a0d366dd29f8eceef64&",
                ],
                [
                'slug' => 'example_6',
                'category_id' => 6,
                'name' => 'Example6',
                'description' => 'Example',
                'product_image' => "https://cdn.discordapp.com/attachments/1021081740242079825/1280816233763176490/product1.jpg?ex=66d97492&is=66d82312&hm=e381f0f18d98f82ba8aa0e62d8f10de26fd9021466f66a0d366dd29f8eceef64&",
                ],
                [
                'slug' => 'example_7',
                'category_id' => 3,
                'name' => 'Example7',
                'description' => 'Example',
                'product_image' => "https://cdn.discordapp.com/attachments/1021081740242079825/1280816233763176490/product1.jpg?ex=66d97492&is=66d82312&hm=e381f0f18d98f82ba8aa0e62d8f10de26fd9021466f66a0d366dd29f8eceef64&",
                ],
                [
                'slug' => 'example_8',
                'category_id' => 2,
                'name' => 'Example8',
                'description' => 'Example',
                'product_image' => "https://cdn.discordapp.com/attachments/1021081740242079825/1280816233763176490/product1.jpg?ex=66d97492&is=66d82312&hm=e381f0f18d98f82ba8aa0e62d8f10de26fd9021466f66a0d366dd29f8eceef64&",
                ]
        ]);

        DB::table('product_items')->insert([
            ['product_id' => 1,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'rating' => 5
            ],
            ['product_id' => 2,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 200000,
            'rating' => 5
            ],
            ['product_id' => 3,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'rating' => 5
            ],
            ['product_id' => 4,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'rating' => 5
            ],
            ['product_id' => 5,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'rating' => 5
            ],
            ['product_id' => 6,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'rating' => 5
            ],
            ['product_id' => 7,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'rating' => 5
            ],
            ['product_id' => 8,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'rating' => 5
            ],
        ]);

        DB::table('promotions')->insert([
            'name' => "Example",
            'description' => "Example",
            'discount_rate' => 50,
            'start_date' => "20 Jul",
            'end_date' => "20 Aug"
        ]);

        DB::table('promotion_categories')->insert([
            'category_id' => 1,
            'promotion_id' => 1,
        ]);

        DB::table('product_reviews')->insert([
            [
                'product_id' => 1,
                'user_id' => 11,
                'rating' => 5,
                'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error exercitationem saepe cupiditate obcaecati, nulla soluta eveniet, doloribus recusandae quibusdam laborum quasi ipsum quaerat maxime reiciendis, amet iusto facere ut non.
                            At sint, consequuntur nobis rerum a numquam est, harum voluptate laboriosam quas consectetur? Perspiciatis sed nostrum velit obcaecati voluptate aspernatur? Omnis doloremque, voluptates quidem ipsum quibusdam asperiores nesciunt minima deserunt?
                            Tempora exercitationem asperiores expedita maxime dolores fuga unde ipsum laudantium. Fuga repellendus consequatur quo laboriosam ratione? Ratione distinctio aut in sint, a exercitationem minus animi quisquam nobis facilis eos adipisci?',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'user_id' => 10,
                'rating' => 4,
                'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error exercitationem saepe cupiditate obcaecati, nulla soluta eveniet, doloribus recusandae quibusdam laborum quasi ipsum quaerat maxime reiciendis, amet iusto facere ut non.
                            At sint',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'user_id' => 11,
                'rating' => 5,
                'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error exercitationem saepe cupiditate obcaecati, nulla soluta eveniet, doloribus recusandae quibusdam laborum quasi ipsum quaerat maxime reiciendis, amet iusto facere ut non.
                            At sint',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

        DB::table('carts')->insert([
            [
                'user_id' => 11
            ]
        ]);

        DB::table('sizes')->insert([
            [
                'size_name' => 'S'
            ],
            [
                'size_name' => 'M'
            ],
            [
                'size_name' => 'L'
            ],
            [
                'size_name' => 'XL'
            ],
            [
                'size_name' => 'XXL'
            ],
        ]);

        // DB::table('cart_items')->insert([
        //     [
        //         'cart_id' => 1,
        //         'product_id' => 1,
        //         'size_id' => 3,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]

        // ]);

    }
}

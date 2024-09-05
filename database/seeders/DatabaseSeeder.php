<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\ProductDetail;
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
            ]
        ]);

        DB::table('product_items')->insert([
            ['product_id' => 1,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'size' => 'S, M, L, XL, XXL',
            'rating' => 5
            ],
            ['product_id' => 2,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'size' => 'S, M, L, XL, XXL',
            'rating' => 5
            ],
            ['product_id' => 3,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'size' => 'S, M, L, XL, XXL',
            'rating' => 5
            ],
            ['product_id' => 4,
            'SKU' => "TSHIRT-BLK-LG",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'size' => 'S, M, L, XL, XXL',
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
    }
}

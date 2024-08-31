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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('product_categories')->insert([
            ['parent_category_id' => 1,
            'category_name' => "Example"],
            ['parent_category_id' => 2,
            'category_name' => "Example"]
        ]);

        DB::table('products')->insert([
            [
            'category_id' => 1,
            'name' => 'Example',
            'description' => 'Example',
            'product_image' => "Example.jpg",
            ],
            [
            'category_id' => 2,
            'name' => 'Example2',
            'description' => 'Example',
            'product_image' => "Example.jpg",
            ],
        ]);

        DB::table('product_items')->insert([
            ['product_id' => 1,
            'SKU' => "Example",
            'qty_in_stock' => 50,
            'product_image' => "Example",
            'price' => 100000,
            'rating' => 5
            ],
            ['product_id' => 2,
            'SKU' => "Example2",
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
    }
}

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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('products')->insert([
            'product_name' => "Example",
            'stock_product' => 100,
            'product_price' => '250.000',
            'product_image' => "Example.jpg",
            'description' => "Example",
            'size' => "Example",
            'gender' => "Example",
            'rating' => 5,
        ]);

        DB::table('product_details')->insert([
            'transaction_id' => 1,
            'product_id' => 1,
            'amount' => 1,
            'total' => 1,
        ]);
    }
}

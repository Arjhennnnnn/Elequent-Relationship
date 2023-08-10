<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Product::create([
        //     'name' => 'product3',
        //     'price' => '400',
        //     'quantity' => '2'
        // ]);

        // ProductDetail::create([
        //     'description' => 'productdes3',
        //     'image' => 'null',
        //     'product_id' => '3'
        // ]);

        CategoryProduct::create([
            'product_id' => '1',
            'category_id' => '1',
        ]);




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

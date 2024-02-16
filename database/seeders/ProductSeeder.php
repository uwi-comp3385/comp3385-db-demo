<?php

namespace Database\Seeders;

use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('products')->insert([
        //    'name' => Str::random(16),
        //    'description' => Str::random(16),
        //    'brand'  => Str::random(16),
        //    'sku'  => Str::random(16),
        //    'price' => 100,
        //    'featured' => 1,
        //    'stock' => 10,
        //    'created_at' => now(),
        //    'updated_at' => now(),
        // ]);

        ProductFactory::times(10)->create();
    }
}

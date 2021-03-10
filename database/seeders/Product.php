<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(10)->create()->each(function ($product) {
            //Seed the relation with Orders
            $product->orders()->attach(\App\Models\Order::all()->random()->id, ['quantity' => rand(1, 20)]);
        });
    }
}

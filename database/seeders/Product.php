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
        \App\Models\Order::factory(3)->create();
        \App\Models\Product::factory(10)->create()->each(function ($product) {
            //Seed the relation with stocks
            $stocks = factory(App\Stock::class)->create();
            $product->stocks()->attach($stocks, ['quantity' => 100, 'min_condition' => 40, 'usual_quantity' => 70, 'location' => 'Cellar']);
        });
        $products = \App\Models\Product::factory(30)->create();


        foreach ($products as $product)
        {
            $product->orders()->attach(1, ['quantity' => 100]);
        }

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Order::factory(15)->create();
    }
}

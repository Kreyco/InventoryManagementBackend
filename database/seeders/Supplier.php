<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Supplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Supplier::factory(10)->create();
    }
}

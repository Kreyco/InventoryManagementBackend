<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Manual way
        DB::table('users')->insert([
            'username'          => 'Wilman Marine',
            'email'             => 'wmarin@example.com',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        //Using factories
        \App\Models\User::factory(30)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => "Mike",
            'role' => "222",
            'email' =>  'admin@gmail.com', //$faker->unique()->safeEmail,
            'phone' =>  '0987654321',
            'country' =>  '0987654321',
            'email_verified_at' => now(),
            'password' => Hash::make('Admin@12345'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}

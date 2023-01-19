<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|

$table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('country');
            $table->string('referal')->nullable();
            $table->string('role')->default('1');
            $table->string('mine')->nullable();
            $table->enum('status', ['active', 'disable', 'pending', 'band', 'verified'])->default('active');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' =>  'admin@gmail.com', //$faker->unique()->safeEmail,
        'phone' =>  '0987654321',
        'country' =>  '0987654321',
        'email_verified_at' => now(),
        'password' => Hash::make('Admin@12345'), // password
        'remember_token' => Str::random(10),
    ];
});

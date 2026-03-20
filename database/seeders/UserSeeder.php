<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "fullname" => "James Anderson",
            "username" => "jamesanderson",
            "email" => "james.anderson@gmail.com",
            "password" => Hash::make("1234"),
            "image" => env("IMAGE_PROFILE"),
            "phone" => "08123456789123",
            "gender" => "M",
            "address" => "Shell road number 10",
            "role_id" => 1,
            "coupon" => 0,
            "point" => 0,
            'remember_token' => Str::random(30),
        ]);

        User::create([
            "fullname" => "Sarah Johnson",
            "username" => "sarahjohnson",
            "email" => "sarah.johnson@gmail.com",
            "password" => Hash::make("1234"),
            "image" => env("IMAGE_PROFILE"),
            "phone" => "082918391823",
            "gender" => "M",
            "address" => "Shell road number 18, Brighton",
            "role_id" => 2,
            "coupon" => 0,
            "point" => 100,
            'remember_token' => Str::random(30),
        ]);

        User::create([
            "fullname" => "Michael Brown",
            "username" => "michaelbrown",
            "email" => "michael.brown@gmail.com",
            "password" => Hash::make("1234"),
            "image" => env("IMAGE_PROFILE"),
            "phone" => "019292823382",
            "gender" => "M",
            "address" => "Small healt 14, London",
            "role_id" => 2,
            "coupon" => 0,
            "point" => 200,
            'remember_token' => Str::random(30),
        ]);

        User::factory(5)->create();
    }
}

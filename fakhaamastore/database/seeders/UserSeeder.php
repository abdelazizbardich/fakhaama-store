<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use User;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(
            [
                'username' => "admin",
                'first_name' => "john",
                'last_name' => "doe",
                'email' => "admin@email.com",
                'email_verified_at' => now(),
                'phone' => fake()->phoneNumber(),
                'password' => password_hash('password@1234',PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
            ]
        );
        // \App\Models\User::factory(10)->create();
    }
}

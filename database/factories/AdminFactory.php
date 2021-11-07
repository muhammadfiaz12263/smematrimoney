<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory

{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $password = 'admin1';
        // $password = Hash::make($password);
        // return [
        //     'name' => 'Super Admin',
        //     'email' => 'admin1@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => $password,
        //      'admin_type' => 1,
        //     'remember_token' => Str::random(10),
        // ];
        $password = 'admin2';
        $password = Hash::make($password);
        return [
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'email_verified_at' => now(),
            'password' => $password,
            'admin_type' => 2,
            'remember_token' => Str::random(10),
        ];
    }
}

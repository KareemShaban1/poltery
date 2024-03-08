<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'kareem shaban',
            'email' => 'kareemshaban@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // You can change the password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
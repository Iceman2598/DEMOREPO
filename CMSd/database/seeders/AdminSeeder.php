<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('login')->insert([
            [
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('kachu@2598'),
                'otp' => '123456',  // Add an OTP if needed
                'rights' => 'SA',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'createdby' => 'system',
                'updatedby' => 'system',
            ],
            [
                'email' => 'admin@gmail.com',
                'password' => Hash::make('kachu@2598'),
                'otp' => '123456',  // Add an OTP if needed
                'rights' => 'A',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'createdby' => 'system',
                'updatedby' => 'system',
            ]
        ]);
    }
}

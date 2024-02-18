<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Terje Nesthus',
            'email' => 'terjen@gmail.com',
            'password' => Hash::make('terjen@gmail.com'),
            'phone' => '48216310',
            'address' => 'Kringelveien 265',
            'city' => 'Sortland',
            'post_code' => '8407',
            'bio' => 'I am a developer',
            'email_verified_at' => now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'image' => '',
            'phone' => 9999999999,
            'occupation' => '',
            'email' => 'hubcricare@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'access_level' => 0,
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

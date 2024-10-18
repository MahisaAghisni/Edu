<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            'role' => 'customer'
        ]);

        DB::table('users')->insert([
                'name' => 'Admin2',
                'email' => 'admin2@admin.com',
                'password' => Hash::make('admin2'),
                'role' => 'admin'
            ]);
    }
}

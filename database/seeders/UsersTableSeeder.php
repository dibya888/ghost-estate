<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'passwrod' => Hash::make('admin'),
                'role' => 'admin',
                'status' => 'active',
            ],

            //Employee
            [
                'name' => 'Logan',
                'email' => 'logan@gmail.com',
                'passwrod' => Hash::make('codg'),
                'role' => 'employee',
                'status' => 'active',
            ]
            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'role_id' => 1,
                'gender_id' => 1,
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
                'display_picture_link' => 'no_picture'
            ],
            [
                'first_name' => 'Kevin',
                'last_name' => 'Tyan',
                'role_id' => 2,
                'gender_id' => 1,
                'email' => 'kevin.tyan@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
                'display_picture_link' => 'no_picture'
            ]
        ]);
    }
}

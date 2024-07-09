<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                'name' => 'Admin Bimbel Brawijaya',
                'email' => 'bimbelbrawijaya@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('admin123'),
            ],
        ];
        DB::table('users')->insert($users);
    }
}

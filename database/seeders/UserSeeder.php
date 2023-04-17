<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Administrator',
                'email' => 'admin@empatlima.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Kasir 1',
                'email' => 'kasir1@empatlima.com',
                'password' => bcrypt('kasir123'),
                'role' => 'kasir'
            ],
            [
                'name' => 'Kasir 2',
                'email' => 'kasir2@empatlima.com',
                'password' => bcrypt('kasir123'),
                'role' => 'kasir'
            ],
            [
                'name' => 'User 1',
                'email' => 'user1@empatlima.com',
                'password' => bcrypt('user123'),
                'role' => 'user'
            ],
            [
                'name' => 'Hanin',
                'email' => 'haninfaishal13@gmail.com',
                'password' => bcrypt('hidupmulia13'),
                'role' => 'user'
            ],
            [
                'name' => 'Aurum NF',
                'email' => 'haninfaishal52@gmail.com',
                'password' => bcrypt('hidupmulia13'),
                'role' => 'user'
            ],
        ];
        foreach($data as $key => $value) {
            User::create($value);
        }
    }
}

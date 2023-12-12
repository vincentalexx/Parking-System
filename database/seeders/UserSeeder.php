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
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin123',
                'phone' => '1234567890',
                'role' => true,
            ],
            [
                'name' => 'vincent',
                'email' => 'vincent@gmail.com',
                'password' => 'vincent123',
                'phone' => '08172399168',
            ],
            [
                'name' => 'alexander',
                'email' => 'alexander@gmail.com',
                'password' => 'alex123',
                'phone' => '0987654321',
            ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('admin2001'),
                'role' => 'admin',
            ], [
                'name' => 'User',
                'username' => 'user',
                'password' => Hash::make('user2001'),
                'role' => 'user',
            ],
        ];
        foreach($users as $user) {
            User::create($user);
        }
    }
}

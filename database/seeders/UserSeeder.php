<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user1 = User::create([
            'email' => 'admin@example.com',
            'name' => 'Admin User',
            'password' => bcrypt('password'),
        ]);
        $user1->assignRole('admin');

        $user2 = User::create([
            'email' => 'pr@example.com',
            'name' => 'Prject manager User',
            'password' => bcrypt('password'),
        ]);
        $user2->assignRole('project manager');

        $user3 = User::create([
            'email' => 'client@example.com',
            'name' => 'Client User',
            'password' => bcrypt('password'),
        ]);
        $user3->assignRole('client');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'gardener@example.com',
            'password' => bcrypt('123'),
        ]);

        $admin->assignRole('admin');


        $user = User::create([
            'name' => 'Admin Role',
            'email' => 'designer@example.com',
            'password' => bcrypt('123'),
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@example.com',
            'password' => bcrypt('123'),
        ]);

        $user->assignRole('user');
    }
}

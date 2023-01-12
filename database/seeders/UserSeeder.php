<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::updateOrCreate(
            ['email' => 'superadmin@gmail.com'],
            [
                'role' => 'SuperAdmin',
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'phone' => '01747436390',
                'username' => 'superadmin',
                'password' => bcrypt('123456'),
                'email_verified_at' => now(),
            ]
        );
    }
}

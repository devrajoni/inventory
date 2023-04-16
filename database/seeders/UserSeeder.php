<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' =>Hash::make('admin1234'),
            'role_id' => 9,

        ]);


        $user->assignRole('Admin');

        $permissions = Permission::all();
        
        foreach ( $permissions as $code ) {
            $user->givePermissionTo($code);
        };
    }
}

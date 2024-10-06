<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'System Admin',
            'email' => 'sysadmin@example.com',
            'password' =>  Hash::make('password'),
            'role' => 'system_admin'
        ]);

        User::create([
            'name' => 'Team Admin',
            'email' => 'teamadmin@example.com',
            'password' => Hash::make('password'),
            'role' => 'team_admin'
        ]);

        User::create([
            'name' => 'Team Member',
            'email' => 'teammember@example.com',
            'password' => Hash::make('password'),
            'role' => 'team_member'
        ]);
    }
}

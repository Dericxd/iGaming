<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'  =>  'admin User',
            'email' =>  'admin@example.com',
            'password' => Hash::make('password'),
            'role'  =>  'admin'
        ]);
        User::factory()->create([
            'name'  =>  'Edit User',
            'email' =>  'edit@example.com',
            'password' => Hash::make('password'),
            'role'  =>  'edit'
        ]);
        User::factory()->create([
            'name'  =>  'Regular User',
            'email' =>  'user@example.com',
            'password' => Hash::make('password'),
            'role'  =>  'user'
        ]);

    }
}

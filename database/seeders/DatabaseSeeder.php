<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Role
        $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);
        Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'Operator']);

        // Buat User Akun Utama Template
        $user = User::firstOrCreate(
            ['email' => 'admin@perusahaan.com'],
            [
                'name' => 'Super Administrator',
                'password' => Hash::make('password123'),
            ]
        );

        if (!$user->hasRole($superAdminRole)) {
            $user->assignRole($superAdminRole);
        }
    }
}
<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'System',
            'email' => 'system@admin.com',
            'password' => Hash::make('password'),
        ])->assignRole(RolesEnum::SYSTEM->value);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ])->assignRole(RolesEnum::ADMIN->value);

        User::factory()->create([
            'name' => 'Manager',
            'email' => 'manager@admin.com',
            'password' => Hash::make('password'),
        ])->assignRole(RolesEnum::MANAGER->value);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ])->assignRole(RolesEnum::USER->value);

        User::factory(10)->create()->each(function ($user) {
            $user->assignRole(RolesEnum::USER->value);
        });
    }
}

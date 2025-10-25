<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $role = Role::where('name', 'admin')->first();

        User::updateOrCreate(
            ['email' => 'admin@mail.com'],
            [
                'name'     => 'Admin',
                'password' => Hash::make('password123'),
                'role_id'  => $role->id,
            ]
        );

        $this->command->info('Admin user berhasil dibuat!');
    }
}

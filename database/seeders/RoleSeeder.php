<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['admin', 'guru', 'ortu'];

        foreach ($roles as $roleName) {
            Role::updateOrCreate(
                ['name' => $roleName],
                ['name' => $roleName]
            );
        }

        $this->command->info('Roles berhasil dibuat!');
    }
}

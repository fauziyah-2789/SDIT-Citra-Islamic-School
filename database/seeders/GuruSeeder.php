<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        $role = Role::where('name', 'guru')->first();

        $guruUser = User::updateOrCreate(
            ['email' => 'guru@mail.com'],
            [
                'name'     => 'Guru Test',
                'password' => Hash::make('guru123'),
                'role_id'  => $role->id,
            ]
        );

        Guru::updateOrCreate(
            ['user_id' => $guruUser->id],
            [
                'nip'      => '123456789',
                'nama'     => $guruUser->name,
                'mapel'    => 'Matematika',
                'profesi'  => 'Guru',
                'no_hp'    => '08123456789',
            ]
        );

        $this->command->info('Guru user berhasil dibuat!');
    }
}

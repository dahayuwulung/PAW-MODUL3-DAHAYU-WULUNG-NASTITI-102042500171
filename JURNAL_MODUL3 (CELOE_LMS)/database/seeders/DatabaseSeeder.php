<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen, dan nomor induk.
        User::updateOrCreate(
            ['email' => 'dosen@telkom.com'], // Patokan pencarian
            [
                'name' => 'Dosen Telkom',
                'nomor_induk' => '11223344', // NIDN Dosen
                'password' => Hash::make('password'), // Passwordnya 'password'
                'role' => 'dosen'
            ]
        );

        // TODO 2 : Buat akun awal untuk Mahasiswa.
        User::updateOrCreate(
            ['email' => 'mahasiswa@telkom.com'],
            [
                'name' => 'Mahasiswa Telkom',
                'nomor_induk' => '22110055', // NIM Mahasiswa
                'password' => Hash::make('password'),
                'role' => 'mahasiswa'
            ]
        );
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Division;
use App\Models\Position;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Ambil ID berdasarkan nama role, divisi, dan posisi
        $superadminRole = Role::where('nm_role', 'Superadmin')->value('id_role');
        $adminRole = Role::where('nm_role', 'Admin')->value('id_role');
        $supervisorRole = Role::where('nm_role', 'Supervisor')->value('id_role');

        $hrdDivision = Division::where('nm_divisi', 'HRD')->value('id_divisi');
        $keuanganDivision = Division::where('nm_divisi', 'Keuangan')->value('id_divisi');
        $itDivision = Division::where('nm_divisi', 'IT')->value('id_divisi');

        $staffPosition = Position::where('nm_position', 'Staff')->value('id_position');
        $managerPosition = Position::where('nm_position', 'Manager')->value('id_position');
        $supervisorPosition = Position::where('nm_position', 'Supervisor')->value('id_position');

        // Pengecekan jika data tidak ditemukan
        if (!$superadminRole || !$adminRole || !$supervisorRole || !$hrdDivision || !$keuanganDivision || !$itDivision || !$staffPosition || !$managerPosition || !$supervisorPosition) {
            dd("Seeder gagal: Pastikan Role, Division, dan Position sudah ada di database.");
        }

        // Buat user Superadmin
        User::create([
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '081234567890',
            'role_id_role' => $superadminRole,
            'position_id_position' => $managerPosition,
            'divisi_id_divisi' => $itDivision,
        ]);

        // Buat user Admin
        User::create([
            'firstname' => 'Admin',
            'lastname' => 'User',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '081234567891',
            'role_id_role' => $adminRole,
            'position_id_position' => $staffPosition,
            'divisi_id_divisi' => $keuanganDivision,
        ]);

        // Buat user Supervisor
        User::create([
            'firstname' => 'Supervisor',
            'lastname' => 'User',
            'username' => 'supervisor',
            'email' => 'supervisor@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '081234567892',
            'role_id_role' => $supervisorRole,
            'position_id_position' => $supervisorPosition,
            'divisi_id_divisi' => $hrdDivision,
        ]);
    }
}

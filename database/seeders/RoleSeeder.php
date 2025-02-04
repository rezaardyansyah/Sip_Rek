<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['nm_role' => 'Superadmin']);
        Role::create(['nm_role' => 'Admin']);
        Role::create(['nm_role' => 'Supervisor']);
    }
}

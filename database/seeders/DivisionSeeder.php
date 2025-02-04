<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    public function run()
    {
        Division::create(['nm_divisi' => 'HRD']);
        Division::create(['nm_divisi' => 'Keuangan']);
        Division::create(['nm_divisi' => 'IT']);
    }
}

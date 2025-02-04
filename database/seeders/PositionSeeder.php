<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    public function run()
    {
        Position::create(['nm_position' => 'Staff']);
        Position::create(['nm_position' => 'Manager']);
        Position::create(['nm_position' => 'Supervisor']);
    }
}

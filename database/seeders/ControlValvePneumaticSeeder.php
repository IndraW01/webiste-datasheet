<?php

namespace Database\Seeders;

use App\Models\ControlValvePneumatic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlValvePneumaticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ControlValvePneumatic::factory()->count(10)->create();
    }
}

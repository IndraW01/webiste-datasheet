<?php

namespace Database\Seeders;

use App\Models\ControlValveGeneral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlValveGeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return ControlValveGeneral::factory()->count(10)->create();
    }
}

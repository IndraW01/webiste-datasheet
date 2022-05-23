<?php

namespace Database\Seeders;

use App\Models\ControlValveActuator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlValveActuatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return ControlValveActuator::factory()->count(10)->create();
    }
}

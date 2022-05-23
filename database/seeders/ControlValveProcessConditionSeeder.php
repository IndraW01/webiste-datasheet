<?php

namespace Database\Seeders;

use App\Models\ControlValveProcessCondition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlValveProcessConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ControlValveProcessCondition::factory()->count(10)->create();
    }
}

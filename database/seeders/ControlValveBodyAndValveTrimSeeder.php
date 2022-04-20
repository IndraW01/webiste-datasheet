<?php

namespace Database\Seeders;

use App\Models\ControlValveBodyAndValveTrim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlValveBodyAndValveTrimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return ControlValveBodyAndValveTrim::factory()->count(10)->create();
    }
}

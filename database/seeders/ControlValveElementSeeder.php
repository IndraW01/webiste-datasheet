<?php

namespace Database\Seeders;

use App\Models\ControlValveElement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlValveElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return ControlValveElement::factory()->count(10)->create();
    }
}

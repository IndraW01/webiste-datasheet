<?php

namespace Database\Seeders;

use App\Models\ControlValvePurchase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlValvePurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return ControlValvePurchase::factory()->count(10)->create();
    }
}

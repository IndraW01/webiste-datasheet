<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControlValvePneumatic>
 */
class ControlValvePneumaticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'datasheet' => $this->faker->unique()->numberBetween(1, 10),
            'function' => 'Controller and Transmitter',
            'output_signal' => '3-15 PSG',
            'control_modes' => 'Proportional + Reset',
            'output_action' => 'Direct',
            'mounting' => 'Yake',
            'weather_proof' => 'IP 54',
            'repeatabiity' => 'From 100 to lessthen',
            'certifications' => 'Atex',
            'hazardous' => 'Zone1',
            'suply_in' => 'Yes',
            'instrument_gas' => '0 - 14,5',
            'filter_regulator' => 'Yes',
            'controller_pneumatic' => '1/4 NPT Internal',
            'suply' => '1/4 NPT Internal',
            'output' => '1/4 NPT Internal',
        ];
    }
}

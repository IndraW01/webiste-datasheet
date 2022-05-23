<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControlValveActuator>
 */
class ControlValveActuatorFactory extends Factory
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
            'actuator' => 'Spring',
            'travel' => '3/4',
            'bench' => '4-10 psi',
            'supply' => 'Hydrocarbon Gas',
            'air_supply' => 'To Open',
            'to_actuator' => '0 - 18 psig',
            'fails_valve' => 'Last Position',
            'handwheel' => 'Yes',
            'hydrostatic' => 'Yes',
            'mounting' => 'Yes',
            'lockup' => 'Yes, Adjustable up stop',
            'mechanical_position' => 'Yes',
            'mechanical_stopper' => 'Yes',
        ];
    }
}

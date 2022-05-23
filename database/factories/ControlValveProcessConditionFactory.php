<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControlValveProcessCondition>
 */
class ControlValveProcessConditionFactory extends Factory
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
            'component' => 'Yes',
            'cases' => 'Maximum Gas/Liquid',
            'fluid' => $this->faker->randomElement(['Hydrocarbon Gas', 'Liquid']),
            'gas_flow' => '-',
            'liquid_flow' => '-',
            'upstream_pressure' => $this->faker->randomFloat(3, 2, 1),
            'downstream_pressure' => '12,00',
            'design_pressure' => '150',
            'operating_temperature' => '74',
            'design_temperature' => '90',
            'viscosity' => '-',
            'density_ftp' => '23,71',
            'molecular_weight' => '19,78',
            'vapor_pressure_at' => '-',
            'sp_heat_ratio' => '1,33',
            'critical_pressure' => '67,5',
            'critical_temperature' => '-59,14',
            'specific_gravity' => '-',
            'calculated_cv' => '1,059',
            'valve_opening' => '51',
            'flash_cav_chocked' => 'Normal',
            'predicted_spl' => '65',
        ];
    }
}

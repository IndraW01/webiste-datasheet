<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControlValveGeneral>
 */
class ControlValveGeneralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->seed('123');

        return [
            'tag_no' =>  $this->faker->unique()->bothify('???-#####'),
            'p_id_number' => $this->faker->unique()->bothify('??-???-?????-####-######'),
            'line_number' => $this->faker->unique()->bothify('?"-??-??-??#-##.##'),
            'line_size' => $this->faker->numerify('#"'),
            'valve_service_type' => 'Control Valve',
            'quantity' => $this->faker->numberBetween(0, 100),
            'service' => 'Fuel Gas Scrubber (V-17330) Inlet Bypass',
            'piping_class' => $this->faker->bothify('?##'),
            'schedule' => 'XXS',
        ];
    }
}

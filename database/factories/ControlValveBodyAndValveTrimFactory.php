<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControlValveBodyAndValveTrim>
 */
class ControlValveBodyAndValveTrimFactory extends Factory
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
            'datasheet' => $this->faker->unique()->numberBetween(1, 10),
            'manufacturer' => $this->faker->unique()->firstName() . '/' . $this->faker->lastName(),
            'valve_body_type' => 'Globe',
            'body_size' => '1"',
            'end_connect_size' => '1"',
            'connect_type_rating' => $this->faker->unique()->bothify('###') . '#' . $this->faker->bothify('??'),
            'flange_face_finish' => '-',
            'valve_rated_cv' => $this->faker->unique()->randomFloat(2, 1, 6),
            'body_material' => 'WCC Steel',
            'plug_material' => 'S416 SST',
            'seat_material' => 'S416 SST',
            'seal_material' => 'N/A',
            'stem_material' => 'S2091 SST',
            'bolt_nut_material' => 'SA-193-B7 Studs/2H Nuts NCF2',
            'packing_type_material' => 'Single PTFE',
            'flow_direction' => 'Flow To Open',
            'shut_off' => 'Class IV',
            'model_no' => 'NPS 1 HPS',
            'trim_charac' => 'Equal Percentage',
            'port_size' => '1/2"',
            'outlet' => '1"',
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControlValveElement>
 */
class ControlValveElementFactory extends Factory
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
            'element_type' => 'Bourdon',
            'element_material' => '316 SS',
            'body_material' => '316 SS',
            'flange_material' => 'N/A',
            'bolt_and_nut' => 'ASTM A193',
            'fill_fluid' => 'N/A',
            'painting' => 'Mfr Std',
            'instrument_range' => '0 - 40 barg',
            'calibration_range' => '3 to 15 psig',
            'scale' => 'in psig',
            'static_pressure' => 'N/A',
            'model_no' => 'C1P-3',
            'manufacture' => 'Emerson',
        ];
    }
}

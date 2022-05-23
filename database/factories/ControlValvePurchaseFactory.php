<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControlValvePurchase>
 */
class ControlValvePurchaseFactory extends Factory
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
            'type' => '401',
            'size' => '535'
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LandlordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'building_number' => rand(1, 100),
            'address_line_1' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'county' => $this->faker->colorName(),
            'postcode' => $this->faker->postcode(),
        ];
    }
}

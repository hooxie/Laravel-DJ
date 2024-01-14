<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'name' => $this->faker->name(),
        'surname' => $this->faker->lastName(),
        'telephone' => $this->faker->phoneNumber(),
        'street' => $this->faker->streetAddress(),
        'country' => $this->faker->country()
        ];
    }
}

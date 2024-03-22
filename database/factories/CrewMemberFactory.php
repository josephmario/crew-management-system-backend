<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CrewMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' =>$this->faker->firstName,
            'last_name' =>$this->faker->lastName,
            'middle_name' =>$this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'birthdate' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'age' => $this->faker->numberBetween(18, 60),
            'rank' => $this->faker->jobTitle,
            'height' => $this->faker->numberBetween(150, 200), // Assuming height is in centimeters
            'weight' => $this->faker->numberBetween(50, 100),
        ];
    }
}

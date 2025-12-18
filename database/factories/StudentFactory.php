<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "name"=>$this->faker->name(),
            "lastName"=>$this->faker->lastName(),
            "email"=>$this->faker->email(),
            "dob"=>$this->faker->date(),
            // "gender"=>$this->faker->date(),
            "score"=>$this->faker->NumberBetween('10','100'),
            "user_id"=>$this->faker->NumberBetween('1','100'),
            "class_id"=>$this->faker->NumberBetween('1','5'),
        ];
    }
}

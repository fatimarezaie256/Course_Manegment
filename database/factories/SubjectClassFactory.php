<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subjectClass>
 */
class SubjectClassFactory extends Factory
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
            // "class_id"=>$this->faker->numberBetween(1,5),
            // "subject_id"=>$this->faker->numberBetween(1,10),
        ];
    }
}

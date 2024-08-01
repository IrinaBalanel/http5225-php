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
            //uses Faker library, try github to see attributes that can be populated in the db 
            'fname' => fake() -> firstName(),
            'lname' => fake() -> lastName(),
            'email' => fake() -> unique() -> safeEmail()
        ];
    }
}

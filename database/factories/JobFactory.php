<?php

namespace Database\Factories;

use Faker\Provider\ar_EG\Company;
use Faker\Provider\ar_JO\Company as Ar_JOCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'tags' => 'laravel, api, backend',
            'company' => fake()->company(),
            'email' => fake()->companyEmail(), 
            'website' => fake()->url(),
            'location' => fake()->city(),
            'description' => fake()->paragraph(5),

        ];
    }
}

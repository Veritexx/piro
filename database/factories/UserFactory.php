<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>  $this->faker->numberBetween($min = 111111, $max = 9999999),
            'lastname' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'department' => $this->faker->randomElement(['IT-1', 'IT-2', 'IT-3', 'DEVOPS-1', 'DEVOPS-2', 'DEVOPS-3', 'DEVOPS-4', 'DEVOPS-5']),
            'location' => $this->faker->randomElement(['Germany', 'USA']),
            'company' => $this->faker->randomElement(['Müller AG', 'SQP GmbH']),
            'job_title' => $this->faker->jobTitle(),
            'email' => $this->faker->unique()->safeEmail(),
            'description' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('passwort'), // Hinweis beachten
            'user_hash' => Str::random(32), // optional, falls du eine eindeutige Nutzer-ID erzeugen möchtest
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

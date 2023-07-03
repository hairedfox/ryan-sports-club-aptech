<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_ids = \App\Models\User::all()->pluck('id')->toArray();
        $types = ['indoor', 'outdoor', 'recreation'];
        var_dump($user_ids);
        return [
            'name' => fake()->name(),
            'timing' => '2-4 minutes',
            'min_people' => 5,
            'max_people' => 10,
            'famous_players' => 'Tiger Woods',
            'rules' => 'default',
            'creator_id' => $user_ids[array_rand($user_ids)],
            'type' => $types[array_rand($types)]
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

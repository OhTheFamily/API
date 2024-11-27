<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puzzle>
 */
class PuzzleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->realText(20);
        $userNumber = User::all()->count();

        $startedDate = $this->faker->dateTimeBetween('-2 years', '-1 years');
        $completedDate = $this->faker->dateTimeBetween('-1 years', 'now');

        return [
            'user_id' => $this->faker->numberBetween(1, $userNumber),
            'name' => $name,
            'description' => $this->faker->realTextBetween(150, 300),
            'image' => $this->faker->imageUrl(1024, 1024, null, true, $name),
            'rating' => $this->faker->numberBetween(1,5),
            'started_at' => $startedDate,
            'completed_at' => $completedDate,
        ];
    }
}

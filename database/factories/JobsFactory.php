<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jobs;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    protected $model = Jobs::class;

    public function definition()
    {
        return [
            'position' => $this->faker->jobTitle,
            'company' => $this->faker->company,
            'salary' => $this->faker->numberBetween(30000, 100000),
        ];
    }
}

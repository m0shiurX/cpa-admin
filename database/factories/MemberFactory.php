<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'photo_path' => 'https://i.pravatar.cc/300',
            'designation' => $this->faker->jobTitle(),
        ];
    }
}

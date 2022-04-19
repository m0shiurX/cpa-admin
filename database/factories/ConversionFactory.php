<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ConversionFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => 2,
            'smartlink_id' => $this->faker->word(),
            'payout_amount' => $this->faker->randomDigit(),
            'conversion_date' => $this->faker->date()
        ];
    }
}

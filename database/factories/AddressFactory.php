<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'recipient' => fake()->name,
            'cep' => fake()->postcode(),
            'address' => fake()->streetName(),
            'number' => fake()->buildingNumber(),
            'complement' => fake()->realText('80'),
            'reference' => fake()->realText('100'),
            'neighborhood' => fake()->realTextBetween('20'),
            'city' => fake()->city(),
            'state' => fake()->randomElement(['SP', 'RJ', 'MG', 'RS', 'BA']),
        ];
    }
}

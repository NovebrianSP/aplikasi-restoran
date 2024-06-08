<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->words(3),
            'email' => fake()->unique()->safeEmail(),
            'no_telepon' => fake()->randomDigit(13),
            'password' => fake()->word(),
            'alamat' => fake()->sentences()
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailPesanan>
 */
class DetailPesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_menu' => Menu::factory(),
            'id_pelanggan' => Pelanggan::factory(),
            'jumlah' => fake()->numberBetween(0, 20)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_kategori' => Kategori::factory(),
            'nama_menu' => fake()->word(2),
            'harga_menu' => fake()->numberBetween(15000, 30000),
            'deskripsi' => fake()->paragraph()
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Chef;
use App\Models\Detail_pesanan;
use App\Models\Kasir;
use App\Models\Menu;
use App\Models\Pelanggan;
use App\Models\Pelayan;
use App\Models\Promo;
use App\Models\Restoran;
use App\Models\status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pesanan>
 */
class PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_resto' => Restoran::factory(),
            'id_menu' => Menu::factory(),
            'id_pelanggan' => Pelanggan::factory(),
            'id_detail' => Detail_pesanan::factory(),
            'id_pelayan' => Pelayan::factory(),
            'id_chef' => Chef::factory(),
            'id_status' => status::factory(),
            'id_kasir' => Kasir::factory(),
            'id_promo' => Promo::factory()
        ];
    }
}

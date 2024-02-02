<?php

namespace Database\Factories;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KategoriBukuRelasi>
 */
class KategoriBukuRelasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "buku_BukuID" => Buku::inRandomOrder()->first()->BukuID,
            'kategori_buku_KategoriID' => KategoriBuku::inRandomOrder()->first()->KategoriID,
        ];
    }
}

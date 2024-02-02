<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Judul' => fake()->sentence(),
            'Penulis' => fake()->name(),
            'Penerbit' => fake()->company(),
            'TahunTerbit' => fake()->year(),
        ];
    }
}

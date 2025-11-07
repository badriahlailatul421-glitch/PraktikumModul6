<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Perpustakaan;

class BukuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'judul' => 'Buku ' . $this->faker->words(3, true),
            'pengarang' => $this->faker->name(),
            'tahun_terbit' => $this->faker->year(),
            'perpustakaan_id' => Perpustakaan::factory(),
        ];
    }
}

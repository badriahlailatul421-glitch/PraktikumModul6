<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PerpustakaanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => 'Perpustakaan ' . $this->faker->company(),
            'alamat' => $this->faker->streetAddress(),
            'kota' => $this->faker->city(),
        ];
    }
}


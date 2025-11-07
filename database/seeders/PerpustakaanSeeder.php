<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perpustakaan;

class PerpustakaanSeeder extends Seeder
{
    public function run(): void
    {
        Perpustakaan::factory()
            ->count(5)
            ->hasBuku(5)
            ->create();
    }
}

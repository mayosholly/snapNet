<?php

namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lga::factory(15)->create();
    }
}

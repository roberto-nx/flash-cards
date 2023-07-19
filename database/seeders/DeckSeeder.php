<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Deck;
use Database\Factories;


class DeckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Deck::factory()
            ->count(3)
            ->create();
    }
}

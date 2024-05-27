<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie' => 'Jojos Bizarre Adventure',
            'user' => 'Nasywa Kamila',
            'rating' => '7/10',
            'date' => '20/05/2024',

        ]);

        Review::create([
            'movie' => 'Noragami',
            'user' => 'Zaenudin Fahmi',
            'rating' => '10/10',
            'date' => '21/05/2024',
        ]);

        Review::create([
            'movie' => 'Wind Breaker',
            'user' => 'Niswatun Khasanah',
            'rating' => '5/10',
            'date' => '22/05/2024',
        ]);

        Review::create([
            'movie' => 'Attack On Titan',
            'user' => 'Dinda',
            'rating' => '6/10',
            'date' => '22/05/2024',
        ]);

        Review::create([
            'movie' => 'Jujutsu Kaisen',
            'user' => 'Revina',
            'rating' => '4/10',
            'date' => '23/05/2024',
        ]);
    }

}

<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Movie;
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
            'id' => 1,
            'movie_id' => '1',
            'user' => 'Nasywa Kamila',
            'rating' => '7/10',
            'date' => '20/05/2024',

        ]);

        Review::create([
            'id' => 2,
            'movie_id' => '2',
            'user' => 'Zaenudin Fahmi',
            'rating' => '10/10',
            'date' => '21/05/2024',
        ]);

        Review::create([
            'id' => 3,
            'movie_id' => '3',
            'user' => 'Niswatun Khasanah',
            'rating' => '4/10',
            'date' => '25/05/2024',
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => '4',
            'user' => 'Meli',
            'rating' => '2/10',
            'date' => '20/05/2024',
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => '5',
            'user' => 'Marsya',
            'rating' => '4/10',
            'date' => '23/05/2024',
        ]);
    }

}

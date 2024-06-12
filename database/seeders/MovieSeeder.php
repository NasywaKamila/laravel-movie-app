<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'genre_id' => '1',
            'poster' => 'movie-01.jpg',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ]);

        Movie::create([
            'id' => 2,
            'title' => 'Noragami',
            'genre_id' => '2',
            'poster' => 'movie-02.jpg',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
         ]);

        Movie::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'genre_id' => '3',
            'poster' => 'movie-03.jpg',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);
        Movie::create([
            'id' => 4,
            'title' => 'Attack of titan',
            'genre_id' => '4',
            'poster' => 'movie-04.jpg',
            'synopsis' => 'Attack on Titan follows the story of Eren Yeager who lives with his adopted sister, Mikasa Ackerman and his best friend Armin Arlert. They live in Shiganshina District which is adjacent to Wall Maria or the outermost wall of the three circular walls. The three enlisted in the military after their parents were devoured by a Titan and they intended to take revenge.',
        ]);
        Movie::create([
            'id' => 5,
            'title' => 'Jujutsu Kaisen',
            'genre_id' => '5',
            'poster' => 'movie-05.jpg',
            'synopsis' => 'Jujutsu Kaisen tells the story of Yuuji Itadori, a talented high school student, who has a strong physique and is suitable for joining the sports club at his school. Instead of joining the sports club, he joined the occult research club. Jujutsu Kaisen synopsis here.',
        ]);
    }
}

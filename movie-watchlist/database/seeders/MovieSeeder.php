<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'The Dark Knight',
                'genre' => 'Action',
                'watched' => true,
                'description' => 'Batman faces the Joker, a criminal mastermind who threatens Gotham City.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Inception',
                'genre' => 'Sci-Fi',
                'watched' => false,
                'description' => 'A skilled thief infiltrates dreams to plant ideas into people’s minds.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMjExMjkwNTQ0Nl5BMl5BanBnXkFtZTcwNTY0OTk1Mw@@._V1_.jpg'
            ],
            [
                'title' => 'Interstellar',
                'genre' => 'Sci-Fi',
                'watched' => false,
                'description' => 'Astronauts travel through a wormhole in search of a new home for humanity.',
                'img_url' => 'https://m.media-amazon.com/images/I/91vIHsL-zjL._AC_UF894,1000_QL80_.jpg'
            ],
            [
                'title' => 'The Godfather',
                'genre' => 'Drama',
                'watched' => true,
                'description' => 'The epic tale of the Corleone mafia family and its struggle for power.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BNGEwYjgwOGQtYjg5ZS00Njc1LTk2ZGEtM2QwZWQ2NjdhZTE5XkEyXkFqcGc@._V1_.jpg'
            ],
            [
                'title' => 'Forrest Gump',
                'genre' => 'Drama',
                'watched' => true,
                'description' => 'A man with a kind heart experiences historical events and extraordinary life moments.',
                'img_url' => 'https://m.media-amazon.com/images/I/71xzEu8NuJL._AC_UF894,1000_QL80_.jpg'
            ],
            [
                'title' => 'The Avengers',
                'genre' => 'Action',
                'watched' => false,
                'description' => 'Superheroes team up to stop Loki and an alien invasion threatening Earth.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BNGE0YTVjNzUtNzJjOS00NGNlLTgxMzctZTY4YTE1Y2Y1ZTU4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Home Alone',
                'genre' => 'Comedy',
                'watched' => true,
                'description' => 'A young boy defends his home from burglars while his family is away.',
                'img_url' => 'https://resizing.flixster.com/co5M_5Zu6VMbv1QEonZiU-oz7Us=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzIyMzBjYjg0LTUxOTEtNDVhMS05OTllLWQxZmY2OGMyN2Y4Ni5wbmc='
            ],
            [
                'title' => 'The Conjuring',
                'genre' => 'Horror',
                'watched' => false,
                'description' => 'Paranormal investigators help a family terrorized by a dark presence in their home.',
                'img_url' => 'https://www.gofevo.com/Upload/14234b32-f2da-4b2e-9f7c-a62762369e7f.jpg'
            ],
            [
                'title' => 'Parasite',
                'genre' => 'Thriller',
                'watched' => true,
                'description' => 'A poor family schemes to infiltrate a wealthy household, with unexpected consequences.',
                'img_url' => 'https://s3.amazonaws.com/nightjarprod/content/uploads/sites/130/2024/03/29150816/7IiTTgloJzvGI1TAYymCfbfl3vT-scaled.jpg'
            ],
            [
                'title' => 'Spirited Away',
                'genre' => 'Anime',
                'watched' => false,
                'description' => 'A young girl navigates a magical world to save her parents and find her way home.',
                'img_url' => 'https://static.wikia.nocookie.net/studio-ghibli/images/c/c5/Spirited_Away.jpg/revision/latest/scale-to-width/360?cb=20220121193910'
            ],
        ];

        foreach($movies as $movie) {
            Movie::create($movie);
        }
    }
}

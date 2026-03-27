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
                'overview' => 'Batman faces his greatest psychological and physical challenge yet as the Joker unleashes chaos across Gotham City. With a plan that pushes the limits of morality, the Joker forces Batman, law enforcement, and citizens alike to confront the fine line between heroism and vigilantism.',
                'release_year' => 2008,
                'rating' => 9.0,
                'total_reviews' => 2800000,
                'description' => 'Batman faces the Joker, a criminal mastermind who threatens Gotham City.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Inception',
                'genre' => 'Sci-Fi',
                'watched' => false,
                'overview' => 'Dom Cobb, a skilled thief specializing in extracting secrets from within dreams, is offered a chance at redemption. He must perform the impossible task of planting an idea into a target’s subconscious, navigating layered dream worlds where time and reality become increasingly distorted and dangerous.',
                'release_year' => 2010,
                'rating' => 8.8,
                'total_reviews' => 2400000,
                'description' => 'A skilled thief infiltrates dreams to plant ideas into people’s minds.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMjExMjkwNTQ0Nl5BMl5BanBnXkFtZTcwNTY0OTk1Mw@@._V1_.jpg'
            ],
            [
                'title' => 'Interstellar',
                'genre' => 'Sci-Fi',
                'watched' => false,
                'overview' => 'In a future where Earth is becoming uninhabitable, a group of astronauts venture through a mysterious wormhole in search of a new home for humanity. As they travel across distant galaxies, they encounter breathtaking phenomena and face emotional sacrifices that test their love, courage, and survival.',
                'release_year' => 2014,
                'rating' => 8.7,
                'total_reviews' => 2100000,
                'description' => 'Astronauts travel through a wormhole in search of a new home for humanity.',
                'img_url' => 'https://m.media-amazon.com/images/I/91vIHsL-zjL._AC_UF894,1000_QL80_.jpg'
            ],
            [
                'title' => 'The Godfather',
                'genre' => 'Drama',
                'watched' => true,
                'overview' => 'The story chronicles the powerful Corleone crime family as patriarch Vito Corleone passes control to his reluctant son, Michael. What begins as a tale of family loyalty evolves into a gripping saga of power, betrayal, and the moral consequences of living within the world of organized crime.',
                'release_year' => 1972,
                'rating' => 9.2,
                'total_reviews' => 1900000,
                'description' => 'The epic tale of the Corleone mafia family and its struggle for power.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BNGEwYjgwOGQtYjg5ZS00Njc1LTk2ZGEtM2QwZWQ2NjdhZTE5XkEyXkFqcGc@._V1_.jpg'
            ],
            [
                'title' => 'Forrest Gump',
                'genre' => 'Drama',
                'watched' => true,
                'overview' => 'Forrest Gump, a man of limited intellect but immense kindness, unintentionally influences several major historical events in the 20th century. Through his journey filled with love, loss, and unexpected success, he teaches that life is unpredictable and that sincerity and perseverance can lead to extraordinary outcomes.',
                'release_year' => 1994,
                'rating' => 8.8,
                'total_reviews' => 2100000,
                'description' => 'A man with a kind heart experiences historical events and extraordinary life moments.',
                'img_url' => 'https://m.media-amazon.com/images/I/71xzEu8NuJL._AC_UF894,1000_QL80_.jpg'
            ],
            [
                'title' => 'The Avengers',
                'genre' => 'Action',
                'watched' => false,
                'overview' => 'When an unexpected global threat emerges, Nick Fury assembles a team of extraordinary individuals known as the Avengers. Despite their clashing personalities and differences, the heroes must learn to work together to stop Loki and his alien army from conquering Earth.',
                'release_year' => 2012,
                'rating' => 8.0,
                'total_reviews' => 1400000,
                'description' => 'Superheroes team up to stop Loki and an alien invasion threatening Earth.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BNGE0YTVjNzUtNzJjOS00NGNlLTgxMzctZTY4YTE1Y2Y1ZTU4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Home Alone',
                'genre' => 'Comedy',
                'watched' => true,
                'overview' => 'Left behind during a family Christmas vacation, young Kevin McCallister must fend for himself in an empty house. When two burglars target his home, Kevin uses his creativity and clever traps to protect it, leading to a series of hilarious and memorable encounters.',
                'release_year' => 1990,
                'rating' => 7.7,
                'total_reviews' => 600000,
                'description' => 'A young boy defends his home from burglars while his family is away.',
                'img_url' => 'https://resizing.flixster.com/co5M_5Zu6VMbv1QEonZiU-oz7Us=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzIyMzBjYjg0LTUxOTEtNDVhMS05OTllLWQxZmY2OGMyN2Y4Ni5wbmc='
            ],
            [
                'title' => 'The Conjuring',
                'genre' => 'Horror',
                'watched' => false,
                'overview' => 'Based on real-life cases, paranormal investigators Ed and Lorraine Warren are called to help a family terrorized by a sinister presence in their farmhouse. As the haunting intensifies, they uncover a dark history that puts everyone involved in grave danger.',
                'release_year' => 2013,
                'rating' => 7.5,
                'total_reviews' => 550000,
                'description' => 'Paranormal investigators help a family terrorized by a dark presence in their home.',
                'img_url' => 'https://www.gofevo.com/Upload/14234b32-f2da-4b2e-9f7c-a62762369e7f.jpg'
            ],
            [
                'title' => 'Parasite',
                'genre' => 'Thriller',
                'watched' => true,
                'overview' => 'The Kim family, struggling to make ends meet, cleverly infiltrates the wealthy Park household by posing as skilled professionals. What begins as a cunning scheme soon spirals into an unpredictable and dark tale of class conflict, greed, and shocking consequences.',
                'release_year' => 2019,
                'rating' => 8.5,
                'total_reviews' => 900000,
                'description' => 'A poor family schemes to infiltrate a wealthy household, with unexpected consequences.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BYjk1Y2U4MjQtY2ZiNS00OWQyLWI3MmYtZWUwNmRjYWRiNWNhXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Spirited Away',
                'genre' => 'Anime',
                'watched' => false,
                'overview' => 'Chihiro, a young girl, becomes trapped in a mysterious spirit world after her parents are transformed into pigs. To survive and save them, she must work in a magical bathhouse, encountering strange creatures and discovering inner strength in a beautifully animated journey of courage and growth.',
                'release_year' => 2001,
                'rating' => 8.6,
                'total_reviews' => 800000,
                'description' => 'A young girl navigates a magical world to save her parents and find her way home.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BNTEyNmEwOWUtYzkyOC00ZTQ4LTllZmUtMjk0Y2YwOGUzYjRiXkEyXkFqcGc@._V1_.jpg'
            ],
            [
                'title' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'watched' => false,
                'overview' => 'Wrongly convicted of murder, Andy Dufresne forms an unlikely friendship in Shawshank prison and refuses to lose hope despite decades of hardship, corruption, and brutality as he quietly schemes toward freedom.',
                'release_year' => 1994,
                'rating' => 9.3,
                'total_reviews' => 3100000,
                'description' => 'Two imprisoned men bond over a number of years, finding consolation and eventual redemption through acts of common decency.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMDAyY2FhYjctNDc5OS00MDNlLThiMGUtY2UxYWVkNGY2ZjljXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'The Godfather Part II',
                'genre' => 'Drama',
                'watched' => false,
                'overview' => 'Both a sequel and prequel, this sprawling crime epic follows young Vito Corleone’s rise in 1920s New York and his son Michael’s ruthless expansion of the family business, exploring power, legacy, and the cost of ambition.',
                'release_year' => 1974,
                'rating' => 9.0,
                'total_reviews' => 1500000,
                'description' => 'The continuing saga of the Corleone crime family as they deal with betrayal, honor, and power.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMDIxMzBlZDktZjMxNy00ZGI4LTgxNDEtYWRlNzRjMjJmOGQ1XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => '12 Angry Men',
                'genre' => 'Drama',
                'watched' => false,
                'overview' => 'In the confines of a jury room, twelve men must unanimously decide a defendant’s fate. As personalities clash and prejudices are challenged, a single vote sparks a tense, revealing examination of justice and human nature.',
                'release_year' => 1957,
                'rating' => 9.0,
                'total_reviews' => 800000,
                'description' => 'A jury deliberates the guilt of a teenager accused of murder, uncovering deeper truths about themselves.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BYjE4NzdmOTYtYjc5Yi00YzBiLWEzNDEtNTgxZGQ2MWVkN2NiXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Avatar',
                'genre' => 'Sci-Fi',
                'watched' => false,
                'overview' => 'On the lush alien world of Pandora, a paraplegic marine joins the indigenous Na’vi people and finds himself torn between orders from Earth and the spiritual connection he forms with his new home, leading to a breathtaking clash of cultures.',
                'release_year' => 2009,
                'rating' => 7.8,
                'total_reviews' => 1100000,
                'description' => 'A marine on an alien planet becomes torn between following orders and protecting the world he feels is his home.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMDEzMmQwZjctZWU2My00MWNlLWE0NjItMDJlYTRlNGJiZjcyXkEyXkFqcGc@._V1_.jpg'
            ],
            [
                'title' => 'Avengers: Endgame',
                'genre' => 'Action',
                'watched' => false,
                'overview' => 'After the devastating events of the Infinity War, the remaining Avengers gather to undo Thanos’s destruction. Facing impossible odds and emotional sacrifice, they unite for a final epic battle that will determine the fate of the universe.',
                'release_year' => 2019,
                'rating' => 8.4,
                'total_reviews' => 1_200_000,
                'description' => 'The Avengers assemble for their greatest mission yet — undoing Thanos’s damage.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Star Wars: Episode V – The Empire Strikes Back',
                'genre' => 'Sci-Fi',
                'watched' => false,
                'overview' => 'The Rebel Alliance faces its greatest danger as the Galactic Empire strikes back with relentless force. Luke Skywalker begins his Jedi training under Yoda, while friends regroup after devastating loss and shocking betrayals.',
                'release_year' => 1980,
                'rating' => 8.7,
                'total_reviews' => 1_200_000,
                'description' => 'The Empire retaliates against the Rebel forces, leading to battles across the galaxy.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMTkxNGFlNDktZmJkNC00MDdhLTg0MTEtZjZiYWI3MGE5NWIwXkEyXkFqcGc@._V1_.jpg'
            ],
            [
                'title' => 'Alien',
                'genre' => 'Horror',
                'watched' => false,
                'overview' => 'A commercial spacecraft answers a distress call on a distant moon, where the crew discovers a deadly alien lifeform. What begins as a routine mission quickly becomes a terrifying fight for survival.',
                'release_year' => 1979,
                'rating' => 8.5,
                'total_reviews' => 1_000_000,
                'description' => 'A terrifying extraterrestrial creature hunts the crew of a space tug.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BN2NhMDk2MmEtZDQzOC00MmY5LThhYzAtMDdjZGFjOGZjMjdjXkEyXkFqcGc@._V1_.jpg'
            ],
            [
                'title' => 'La La Land',
                'genre' => 'Musical',
                'watched' => false,
                'overview' => 'A jazz musician and an aspiring actress navigate love and ambition in Los Angeles. Balancing shimmering dreams with harsh realities, their relationship becomes a bittersweet reflection on art, success, and what might have been.',
                'release_year' => 2016,
                'rating' => 8.0,
                'total_reviews' => 737000,
                'description' => 'Romance and ambition intersect in this musical love story in L.A.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BMzUzNDM2NzM2MV5BMl5BanBnXkFtZTgwNTM3NTg4OTE@._V1_.jpg'
            ],
            [
                'title' => 'Jaws',
                'genre' => 'Thriller',
                'watched' => false,
                'overview' => 'A great white shark terrorizes a beach community, forcing a small‑town sheriff, a marine biologist, and a seasoned fisherman to set out on a harrowing hunt that tests their courage and survival instincts.',
                'release_year' => 1975,
                'rating' => 8.1,
                'total_reviews' => 720000,
                'description' => 'A giant man‑eating shark wreaks havoc on a resort town.',
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BYjViNDQzNmUtYzkxZi00NTk5LTljMmItYjJlZmZkODIxNjU1XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
            ]
        ];

        foreach($movies as $movie) {
            Movie::create($movie);
        }
    }
}

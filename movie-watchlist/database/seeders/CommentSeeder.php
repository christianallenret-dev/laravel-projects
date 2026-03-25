<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            ['movie_id' => 1,  'author' => 'James Carter',    'body' => 'One of the greatest superhero films ever made. The Joker was phenomenal.'],
            ['movie_id' => 1,  'author' => 'Sofia Reyes',      'body' => 'Heath Ledger absolutely stole the show. A masterpiece of storytelling.'],
            ['movie_id' => 1,  'author' => 'Mark Hendricks',   'body' => 'The practical effects and cinematography still hold up to this day.'],
            ['movie_id' => 1,  'author' => 'Anna Lim',         'body' => 'I have watched this five times and it never gets old.'],
            ['movie_id' => 1,  'author' => 'Carlos Mendes',    'body' => 'The interrogation scene alone is worth watching the whole film.'],
            ['movie_id' => 2,  'author' => 'Leah Santos',      'body' => 'Mind bending and beautifully shot. Nolan at his finest.'],
            ['movie_id' => 2,  'author' => 'Ryan Cruz',        'body' => 'I needed to watch it twice just to fully understand the ending.'],
            ['movie_id' => 2,  'author' => 'Patricia Gomez',   'body' => 'The spinning top at the end still drives me crazy.'],
            ['movie_id' => 2,  'author' => 'Daniel Marsh',     'body' => 'An absolute cinematic experience unlike anything else.'],
            ['movie_id' => 2,  'author' => 'Ella Fontaine',    'body' => 'Leonardo DiCaprio deserved an Oscar for this performance.'],
            ['movie_id' => 3,  'author' => 'Nathan Brooks',    'body' => 'A visually stunning film that makes you feel small in the universe.'],
            ['movie_id' => 3,  'author' => 'Grace Tan',        'body' => 'The docking scene had me on the edge of my seat the entire time.'],
            ['movie_id' => 3,  'author' => 'Victor Salinas',   'body' => 'Hans Zimmer\'s score elevated every single scene in this film.'],
            ['movie_id' => 3,  'author' => 'Mia Johansson',    'body' => 'The ending made me cry. Beautifully written and directed.'],
            ['movie_id' => 3,  'author' => 'Tom Eriksen',      'body' => 'One of those films that stays with you for days after watching.'],
            ['movie_id' => 4,  'author' => 'Rosa Delgado',     'body' => 'A timeless classic. The acting and writing are simply unmatched.'],
            ['movie_id' => 4,  'author' => 'Henry Walsh',      'body' => 'Every frame of this film feels deliberate and meaningful.'],
            ['movie_id' => 4,  'author' => 'Julia Navarro',    'body' => 'Marlon Brando\'s performance is one of the best in cinema history.'],
            ['movie_id' => 4,  'author' => 'Oscar Fleming',    'body' => 'The story of power and family loyalty told perfectly.'],
            ['movie_id' => 4,  'author' => 'Camille Dupont',   'body' => 'I finally understand why everyone considers this a must watch.'],
            ['movie_id' => 5,  'author' => 'Ben Lacroix',      'body' => 'A heartwarming story that reminds you of the beauty of life.'],
            ['movie_id' => 5,  'author' => 'Iris Yamamoto',    'body' => 'Life is like a box of chocolates and this film is pure gold.'],
            ['movie_id' => 5,  'author' => 'Luke Pemberton',   'body' => 'Tom Hanks was born to play this role. Absolutely incredible.'],
            ['movie_id' => 5,  'author' => 'Nadia Osei',       'body' => 'I cried three times watching this. An emotional rollercoaster.'],
            ['movie_id' => 5,  'author' => 'Felix Bauer',      'body' => 'One of those rare films that appeals to everyone regardless of age.'],
            ['movie_id' => 6,  'author' => 'Tina Morales',     'body' => 'The team up moments gave me chills throughout the entire film.'],
            ['movie_id' => 6,  'author' => 'Aaron Steele',     'body' => 'A fun and action packed ride from beginning to end.'],
            ['movie_id' => 6,  'author' => 'Priya Kapoor',     'body' => 'The portal scene in Endgame still tops it but this one started it all.'],
            ['movie_id' => 6,  'author' => 'Leo Hartmann',     'body' => 'Great ensemble cast with perfect chemistry between all characters.'],
            ['movie_id' => 6,  'author' => 'Zoe Whitfield',    'body' => 'This film changed the superhero genre forever and for the better.'],
            ['movie_id' => 7,  'author' => 'Sam Nguyen',       'body' => 'A holiday classic that never gets old no matter how many times you watch.'],
            ['movie_id' => 7,  'author' => 'Clara Jensen',     'body' => 'Macaulay Culkin is iconic in this role. Pure childhood nostalgia.'],
            ['movie_id' => 7,  'author' => 'Rico Alvarez',     'body' => 'The booby trap scenes are endlessly creative and hilarious.'],
            ['movie_id' => 7,  'author' => 'Fiona Bell',       'body' => 'My whole family watches this every Christmas without fail.'],
            ['movie_id' => 7,  'author' => 'Hugo Stern',       'body' => 'Still funny after all these years. A timeless family comedy.'],
            ['movie_id' => 8,  'author' => 'Vera Kowalski',    'body' => 'Genuinely terrifying from start to finish. Could not sleep after.'],
            ['movie_id' => 8,  'author' => 'Ivan Petrov',      'body' => 'The atmosphere and tension built throughout is masterfully done.'],
            ['movie_id' => 8,  'author' => 'Layla Hassan',     'body' => 'Based on true events which makes it even more disturbing to watch.'],
            ['movie_id' => 8,  'author' => 'Finn O\'Brien',    'body' => 'One of the scariest horror films I have ever seen. Brilliantly made.'],
            ['movie_id' => 8,  'author' => 'Stella Park',      'body' => 'The sound design alone is enough to give you nightmares for weeks.'],
            ['movie_id' => 9,  'author' => 'Marco Ricci',      'body' => 'A brilliant social commentary wrapped in an intense thriller.'],
            ['movie_id' => 9,  'author' => 'Hana Yoshida',     'body' => 'The twist completely floored me. I did not see it coming at all.'],
            ['movie_id' => 9,  'author' => 'Eli Schwartz',     'body' => 'Deserved every award it won. A near perfect film in every way.'],
            ['movie_id' => 9,  'author' => 'Amara Diallo',     'body' => 'Bong Joon Ho is a genius. This film proves it beyond any doubt.'],
            ['movie_id' => 9,  'author' => 'Tobias Krause',    'body' => 'Watch it without any spoilers. The experience is absolutely worth it.'],
            ['movie_id' => 10, 'author' => 'Yuki Tanaka',      'body' => 'Miyazaki created a world so rich and magical it feels truly alive.'],
            ['movie_id' => 10, 'author' => 'Chiara Russo',     'body' => 'The animation quality is breathtaking even by today\'s standards.'],
            ['movie_id' => 10, 'author' => 'Omar Khalid',      'body' => 'A coming of age story told with so much heart and imagination.'],
            ['movie_id' => 10, 'author' => 'Nina Bergström',   'body' => 'Studio Ghibli at its absolute peak. A film for all generations.'],
            ['movie_id' => 10, 'author' => 'Ren Fujita',       'body' => 'No Face and Chihiro\'s journey is one of anime\'s greatest stories ever told.'],
        ];

        foreach ($comments as $comment) {
            Comment::create($comment);
        }
    }
}

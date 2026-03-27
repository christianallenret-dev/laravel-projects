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
            // Movie 1: The Dark Knight
            ['movie_id' => 1, 'author' => 'James Carter',    'body' => 'One of the greatest superhero films ever made. The Joker was phenomenal.', 'rating' => 5],
            ['movie_id' => 1, 'author' => 'Sofia Reyes',     'body' => 'Heath Ledger absolutely stole the show. A masterpiece of storytelling.', 'rating' => 5],
            ['movie_id' => 1, 'author' => 'Mark Hendricks',  'body' => 'The practical effects and cinematography still hold up to this day.', 'rating' => 4],
            ['movie_id' => 1, 'author' => 'Anna Lim',        'body' => 'I have watched this five times and it never gets old.', 'rating' => 5],
            ['movie_id' => 1, 'author' => 'Carlos Mendes',   'body' => 'The interrogation scene alone is worth watching the whole film.', 'rating' => 5],

            // Movie 2: Inception
            ['movie_id' => 2, 'author' => 'Leah Santos',     'body' => 'Mind bending and beautifully shot. Nolan at his finest.', 'rating' => 5],
            ['movie_id' => 2, 'author' => 'Ryan Cruz',       'body' => 'I needed to watch it twice just to fully understand the ending.', 'rating' => 4],
            ['movie_id' => 2, 'author' => 'Patricia Gomez',  'body' => 'The spinning top at the end still drives me crazy.', 'rating' => 4],
            ['movie_id' => 2, 'author' => 'Daniel Marsh',    'body' => 'An absolute cinematic experience unlike anything else.', 'rating' => 5],
            ['movie_id' => 2, 'author' => 'Ella Fontaine',   'body' => 'Leonardo DiCaprio deserved an Oscar for this performance.', 'rating' => 5],

            // Movie 3: Interstellar
            ['movie_id' => 3, 'author' => 'Nathan Brooks',   'body' => 'A visually stunning film that makes you feel small in the universe.', 'rating' => 5],
            ['movie_id' => 3, 'author' => 'Grace Tan',       'body' => 'The docking scene had me on the edge of my seat the entire time.', 'rating' => 5],
            ['movie_id' => 3, 'author' => 'Victor Salinas',  'body' => 'Hans Zimmer\'s score elevated every single scene in this film.', 'rating' => 5],
            ['movie_id' => 3, 'author' => 'Mia Johansson',   'body' => 'The ending made me cry. Beautifully written and directed.', 'rating' => 5],
            ['movie_id' => 3, 'author' => 'Tom Eriksen',     'body' => 'One of those films that stays with you for days after watching.', 'rating' => 5],

            // Movie 4: The Godfather
            ['movie_id' => 4, 'author' => 'Rosa Delgado',    'body' => 'A timeless classic. The acting and writing are simply unmatched.', 'rating' => 5],
            ['movie_id' => 4, 'author' => 'Henry Walsh',     'body' => 'Every frame of this film feels deliberate and meaningful.', 'rating' => 5],
            ['movie_id' => 4, 'author' => 'Julia Navarro',   'body' => 'Marlon Brando\'s performance is one of the best in cinema history.', 'rating' => 5],
            ['movie_id' => 4, 'author' => 'Oscar Fleming',   'body' => 'The story of power and family loyalty told perfectly.', 'rating' => 5],
            ['movie_id' => 4, 'author' => 'Camille Dupont',  'body' => 'I finally understand why everyone considers this a must watch.', 'rating' => 5],

            // Movie 5: Forrest Gump
            ['movie_id' => 5, 'author' => 'Ben Lacroix',     'body' => 'A heartwarming story that reminds you of the beauty of life.', 'rating' => 5],
            ['movie_id' => 5, 'author' => 'Iris Yamamoto',   'body' => 'Life is like a box of chocolates and this film is pure gold.', 'rating' => 5],
            ['movie_id' => 5, 'author' => 'Luke Pemberton',  'body' => 'Tom Hanks was born to play this role. Absolutely incredible.', 'rating' => 5],
            ['movie_id' => 5, 'author' => 'Nadia Osei',      'body' => 'I cried three times watching this. An emotional rollercoaster.', 'rating' => 5],
            ['movie_id' => 5, 'author' => 'Felix Bauer',     'body' => 'One of those rare films that appeals to everyone regardless of age.', 'rating' => 5],

            // Movie 6: The Avengers
            ['movie_id' => 6, 'author' => 'Tina Morales',    'body' => 'The team up moments gave me chills throughout the entire film.', 'rating' => 5],
            ['movie_id' => 6, 'author' => 'Aaron Steele',    'body' => 'A fun and action packed ride from beginning to end.', 'rating' => 4],
            ['movie_id' => 6, 'author' => 'Priya Kapoor',    'body' => 'The portal scene in Endgame still tops it but this one started it all.', 'rating' => 4],
            ['movie_id' => 6, 'author' => 'Leo Hartmann',    'body' => 'Great ensemble cast with perfect chemistry between all characters.', 'rating' => 5],
            ['movie_id' => 6, 'author' => 'Zoe Whitfield',   'body' => 'This film changed the superhero genre forever and for the better.', 'rating' => 5],

            // Movie 7: Home Alone
            ['movie_id' => 7, 'author' => 'Sam Nguyen',      'body' => 'A holiday classic that never gets old no matter how many times you watch.', 'rating' => 5],
            ['movie_id' => 7, 'author' => 'Clara Jensen',    'body' => 'Macaulay Culkin is iconic in this role. Pure childhood nostalgia.', 'rating' => 5],
            ['movie_id' => 7, 'author' => 'Rico Alvarez',    'body' => 'The booby trap scenes are endlessly creative and hilarious.', 'rating' => 5],
            ['movie_id' => 7, 'author' => 'Fiona Bell',      'body' => 'My whole family watches this every Christmas without fail.', 'rating' => 5],
            ['movie_id' => 7, 'author' => 'Hugo Stern',      'body' => 'Still funny after all these years. A timeless family comedy.', 'rating' => 5],

            // Movie 8: The Conjuring
            ['movie_id' => 8, 'author' => 'Vera Kowalski',   'body' => 'Genuinely terrifying from start to finish. Could not sleep after.', 'rating' => 5],
            ['movie_id' => 8, 'author' => 'Ivan Petrov',     'body' => 'The atmosphere and tension built throughout is masterfully done.', 'rating' => 5],
            ['movie_id' => 8, 'author' => 'Layla Hassan',    'body' => 'Based on true events which makes it even more disturbing to watch.', 'rating' => 5],
            ['movie_id' => 8, 'author' => 'Finn O\'Brien',   'body' => 'One of the scariest horror films I have ever seen. Brilliantly made.', 'rating' => 5],
            ['movie_id' => 8, 'author' => 'Stella Park',     'body' => 'The sound design alone is enough to give you nightmares for weeks.', 'rating' => 4],

            // Movie 9: Parasite
            ['movie_id' => 9, 'author' => 'Marco Ricci',     'body' => 'A brilliant social commentary wrapped in an intense thriller.', 'rating' => 5],
            ['movie_id' => 9, 'author' => 'Hana Yoshida',    'body' => 'The twist completely floored me. I did not see it coming at all.', 'rating' => 5],
            ['movie_id' => 9, 'author' => 'Eli Schwartz',    'body' => 'Deserved every award it won. A near perfect film in every way.', 'rating' => 5],
            ['movie_id' => 9, 'author' => 'Amara Diallo',    'body' => 'Bong Joon Ho is a genius. This film proves it beyond any doubt.', 'rating' => 5],
            ['movie_id' => 9, 'author' => 'Tobias Krause',   'body' => 'Watch it without any spoilers. The experience is absolutely worth it.', 'rating' => 5],

            // Movie 10: Spirited Away
            ['movie_id' => 10, 'author' => 'Yuki Tanaka',    'body' => 'Miyazaki created a world so rich and magical it feels truly alive.', 'rating' => 5],
            ['movie_id' => 10, 'author' => 'Chiara Russo',   'body' => 'The animation quality is breathtaking even by today\'s standards.', 'rating' => 5],
            ['movie_id' => 10, 'author' => 'Omar Khalid',    'body' => 'A coming of age story told with so much heart and imagination.', 'rating' => 5],
            ['movie_id' => 10, 'author' => 'Nina Bergström', 'body' => 'Studio Ghibli at its absolute peak. A film for all generations.', 'rating' => 5],
            ['movie_id' => 10, 'author' => 'Ren Fujita',     'body' => 'No Face and Chihiro\'s journey is one of anime\'s greatest stories ever told.', 'rating' => 5],
        
            // Movie 11: The Shawshank Redemption
            ['movie_id' => 11, 'author' => 'Oliver White',     'body' => 'An inspiring story about hope and friendship. Truly timeless.', 'rating' => 5],
            ['movie_id' => 11, 'author' => 'Sophia Kim',       'body' => 'Morgan Freeman and Tim Robbins are perfect together. Outstanding performances.', 'rating' => 5],
            ['movie_id' => 11, 'author' => 'Leo Wang',         'body' => 'The plot unfolds so beautifully. Never a dull moment.', 'rating' => 5],
            ['movie_id' => 11, 'author' => 'Isabella Rossi',   'body' => 'I get emotional every time I watch the ending.', 'rating' => 5],
            ['movie_id' => 11, 'author' => 'Ethan Miller',     'body' => 'Deserves all the acclaim it has received. A masterpiece.', 'rating' => 5],

            // Movie 12: The Godfather Part II
            ['movie_id' => 12, 'author' => 'Natalie Parker',   'body' => 'The continuation of the Corleone saga is just as gripping as the first.', 'rating' => 5],
            ['movie_id' => 12, 'author' => 'Derek Shaw',       'body' => 'Brilliant storytelling and complex characters.', 'rating' => 5],
            ['movie_id' => 12, 'author' => 'Lucia Mendes',     'body' => 'Michael Corleone\'s arc is chilling and unforgettable.', 'rating' => 5],
            ['movie_id' => 12, 'author' => 'Viktor Novak',     'body' => 'The cinematography and score are perfectly done.', 'rating' => 5],
            ['movie_id' => 12, 'author' => 'Amelie Dupont',    'body' => 'Part II is rare in being as good as or better than the original.', 'rating' => 5],

            // Movie 13: 12 Angry Men
            ['movie_id' => 13, 'author' => 'Samuel Ortiz',     'body' => 'A masterclass in dialogue and tension. Incredible film.', 'rating' => 5],
            ['movie_id' => 13, 'author' => 'Clara Higgins',    'body' => 'Shows the power of discussion and moral courage.', 'rating' => 5],
            ['movie_id' => 13, 'author' => 'Ahmed Khan',       'body' => 'Tense, thought-provoking, and beautifully acted.', 'rating' => 5],
            ['movie_id' => 13, 'author' => 'Helena Park',      'body' => 'I learned so much about human behavior from this film.', 'rating' => 5],
            ['movie_id' => 13, 'author' => 'Jonas Schmidt',    'body' => 'Every scene is gripping. Dialogue-driven perfection.', 'rating' => 5],

            // Movie 14: Avatar
            ['movie_id' => 14, 'author' => 'Mia Chen',         'body' => 'The visuals are breathtaking. James Cameron really outdid himself.', 'rating' => 5],
            ['movie_id' => 14, 'author' => 'Lucas Pereira',    'body' => 'Pandora is a world I want to live in. Stunning!', 'rating' => 5],
            ['movie_id' => 14, 'author' => 'Emma Doyle',       'body' => 'Story is simple but the world-building is incredible.', 'rating' => 4],
            ['movie_id' => 14, 'author' => 'David Thompson',   'body' => 'A cinematic experience like no other.', 'rating' => 5],
            ['movie_id' => 14, 'author' => 'Leila Hassan',     'body' => 'Loved the Na’vi culture and the environmental message.', 'rating' => 5],

            // Movie 15: Avengers: Endgame
            ['movie_id' => 15, 'author' => 'Chris Adams',      'body' => 'Epic, emotional, and perfectly executed. Loved every second.', 'rating' => 5],
            ['movie_id' => 15, 'author' => 'Sophia Russo',     'body' => 'The final battle made my jaw drop. Marvel at its best.', 'rating' => 5],
            ['movie_id' => 15, 'author' => 'Tyler Brown',      'body' => 'Closure to the Infinity Saga done brilliantly.', 'rating' => 5],
            ['movie_id' => 15, 'author' => 'Emma Johansson',   'body' => 'Loved seeing all the characters come together for one epic fight.', 'rating' => 5],
            ['movie_id' => 15, 'author' => 'Lucas Silva',      'body' => 'The emotional moments hit hard. Fantastic.', 'rating' => 5],

            // Movie 16: Star Wars: Episode V – The Empire Strikes Back
            ['movie_id' => 16, 'author' => 'Aiden Scott',      'body' => 'The best Star Wars movie by far. Dark and epic.', 'rating' => 5],
            ['movie_id' => 16, 'author' => 'Lily Chen',        'body' => 'The reveal about Darth Vader was legendary.', 'rating' => 5],
            ['movie_id' => 16, 'author' => 'Maximilian Krüger','body' => 'The battle scenes and character arcs are iconic.', 'rating' => 5],
            ['movie_id' => 16, 'author' => 'Olivia Davis',     'body' => 'Yoda teaching Luke is one of my favorite parts.', 'rating' => 5],
            ['movie_id' => 16, 'author' => 'Hiroshi Sato',     'body' => 'Dark, thrilling, and emotionally impactful. A perfect sequel.', 'rating' => 5],

            // Movie 17: Alien
            ['movie_id' => 17, 'author' => 'Nina Kruger',      'body' => 'Terrifying and suspenseful. The alien design is perfect.', 'rating' => 5],
            ['movie_id' => 17, 'author' => 'Oliver Wright',    'body' => 'Ridley Scott created a masterclass in sci-fi horror.', 'rating' => 5],
            ['movie_id' => 17, 'author' => 'Leila Hassan',     'body' => 'Sigourney Weaver was incredible. Strong female lead.', 'rating' => 5],
            ['movie_id' => 17, 'author' => 'Carlos Ortega',    'body' => 'Every scene builds tension to perfection.', 'rating' => 5],
            ['movie_id' => 17, 'author' => 'Marta Jensen',     'body' => 'A terrifying classic that set the bar for sci-fi horror.', 'rating' => 5],

            // Movie 18: La La Land
            ['movie_id' => 18, 'author' => 'Sophia Lewis',     'body' => 'Musical numbers and cinematography are breathtaking.', 'rating' => 5],
            ['movie_id' => 18, 'author' => 'Daniel Carter',    'body' => 'A bittersweet romance that feels realistic and beautiful.', 'rating' => 5],
            ['movie_id' => 18, 'author' => 'Mia Rossi',        'body' => 'Emma Stone and Ryan Gosling have amazing chemistry.', 'rating' => 5],
            ['movie_id' => 18, 'author' => 'Leo Moretti',      'body' => 'The ending stuck with me for days. Amazing storytelling.', 'rating' => 5],
            ['movie_id' => 18, 'author' => 'Elena Park',       'body' => 'Musical lovers will adore this film. A modern classic.', 'rating' => 5],

            // Movie 19: Jaws
            ['movie_id' => 19, 'author' => 'Tommy Lee',        'body' => 'The suspense is perfect. Spielberg was a genius.', 'rating' => 5],
            ['movie_id' => 19, 'author' => 'Clara O\'Neil',    'body' => 'I still check the water before swimming after watching this!', 'rating' => 5],
            ['movie_id' => 19, 'author' => 'Marcus Wu',        'body' => 'Iconic music score and terrifying moments.', 'rating' => 5],
            ['movie_id' => 19, 'author' => 'Hannah Schneider', 'body' => 'Timeless thriller that changed cinema forever.', 'rating' => 5],
            ['movie_id' => 19, 'author' => 'Dmitri Ivanov',    'body' => 'Classic monster movie done right. Incredible.', 'rating' => 5],
        ];

        foreach ($comments as $comment) {
            Comment::create($comment);
        }
    }
}

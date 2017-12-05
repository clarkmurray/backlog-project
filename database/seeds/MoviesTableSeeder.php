<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
        	'title' => 'Batman Begins',
        	'director' => 'Christopher Nolan',
        	'release' => '2005',
        	'runtime' => '140',
            'description' => 'After training with his mentor, Batman begins his fight to free crime-ridden Gotham City from the corruption that Scarecrow and the League of Shadows have cast upon it.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BYzc4ODgyZmYtMGFkZC00NGQyLWJiMDItMmFmNjJiZjcxYzVmXkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_SY1000_CR0,0,676,1000_AL_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('movies')->insert([
        	'title' => 'The Dark Knight',
        	'director' => 'Christopher Nolan',
        	'release' => '2008',
        	'runtime' => '152',
            'description' => 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham, the Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('movies')->insert([
        	'title' => 'The Dark Knight Rises',
        	'director' => 'Christopher Nolan',
        	'release' => '2012',
        	'runtime' => '164',
            'description' => 'Eight years after the Joker\'s reign of anarchy, the Dark Knight, with the help of the enigmatic Catwoman, is forced from his exile to save Gotham City, now on the edge of total annihilation, from the brutal guerrilla terrorist Bane.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTk4ODQzNDY3Ml5BMl5BanBnXkFtZTcwODA0NTM4Nw@@._V1_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('movies')->insert([
        	'title' => 'There Will Be Blood',
        	'director' => 'Paul Thomas Anderson',
        	'release' => '2007',
        	'runtime' => '158',
            'description' => 'A story of family, religion, hatred, oil and madness, focusing on a turn-of-the-century prospector in the early days of the business.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjAxODQ4MDU5NV5BMl5BanBnXkFtZTcwMDU4MjU1MQ@@._V1_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('movies')->insert([
        	'title' => 'The Lion King',
        	'director' => 'Roger Allers and Rob Minkoff',
        	'release' => '1994',
        	'runtime' => '88',
            'description' => 'Lion cub and future king Simba searches for his identity. His eagerness to please others and penchant for testing his boundaries sometimes gets him into trouble.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BYTYxNGMyZTYtMjE3MS00MzNjLWFjNmYtMDk3N2FmM2JiM2M1XkEyXkFqcGdeQXVyNjY5NDU4NzI@._V1_SY1000_CR0,0,673,1000_AL_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('movies')->insert([
        	'title' => 'The Godfather',
        	'director' => 'Francis Ford Coppola',
        	'release' => '1972',
        	'runtime' => '175',
            'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BY2Q2NzQ3ZDUtNWU5OC00Yjc0LThlYmEtNWM3NTFmM2JiY2VhXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,700,1000_AL_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('movies')->insert([
        	'title' => 'Star Wars Episode IV: A New Hope',
        	'director' => 'George Lucas',
        	'release' => '1977',
        	'runtime' => '121',
            'description' => 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle-station while also attempting to rescue Princess Leia from the evil Darth Vader.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BNzVlY2MwMjktM2E4OS00Y2Y3LWE3ZjctYzhkZGM3YzA1ZWM2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,643,1000_AL_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

         DB::table('movies')->insert([
        	'title' => 'Star Wars Episode V: The Empire Strikes Back',
        	'director' => 'Irvin Kershner',
        	'release' => '1980',
        	'runtime' => '124',
            'description' => 'After the rebels are overpowered by the Empire on their newly established base, Luke Skywalker begins Jedi training with Yoda. His friends accept shelter from a questionable ally as Darth Vader hunts them in a plan to capture Luke.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjk2M2FiMTEtMzFlNS00MzcyLWFjYTAtODBiMDJjMWVlZTUwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('movies')->insert([
        	'title' => 'Star Wars Episode VI: Return of the Jedi',
        	'director' => 'Richard Marquand',
        	'release' => '1983',
        	'runtime' => '131',
            'description' => 'After a daring mission to rescue Han Solo from Jabba the Hutt, the rebels dispatch to Endor to destroy a more powerful Death Star. Meanwhile, Luke struggles to help Vader back from the dark side without falling into the Emperor\'s trap.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BOWZlMjFiYzgtMTUzNC00Y2IzLTk1NTMtZmNhMTczNTk0ODk1XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SY999_CR0,0,644,999_AL_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('movies')->insert([
        	'title' => 'The Martian',
        	'director' => 'Ridley Scott',
        	'release' => '2015',
        	'runtime' => '144',
            'description' => 'An astronaut becomes stranded on Mars after his team assume him dead, and must rely on his ingenuity to find a way to signal to Earth that he is alive.',
            'poster_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTc2MTQ3MDA1Nl5BMl5BanBnXkFtZTgwODA3OTI4NjE@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    }
}

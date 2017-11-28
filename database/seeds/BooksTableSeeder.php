<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Sorcerer\'s Stone',
        	'author' => 'J.K. Rowling',
        	'published' => '1997',
        	'pages' => '309',
            'summary' => 'Harry Potter thinks he is an ordinary boy – until he is rescued by an owl, taken to Hogwarts School of Witchcraft and Wizardry, learns to play Quidditch and does battle in a deadly duel. The Reason: HARRY POTTER IS A WIZARD!',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51DF6ZR8G7L._SX329_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

         DB::table('books')->insert([
        	'title' => 'Harry Potter and the Chamber of Secrets',
        	'author' => 'J.K. Rowling',
        	'published' => '1998',
        	'pages' => '341',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51jNORv6nQL._SX340_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Prisoner of Azkaban',
        	'author' => 'J.K. Rowling',
        	'published' => '1999',
            'summary' => 'For twelve long years, the dread fortress of Azkaban held an infamous prisoner named Sirius Black. Convicted of killing thirteen people with a single curse, he was said to be the heir apparent to the Dark Lord, Voldemort.

                Now he has escaped, leaving only two clues as to where he might be headed: Harry Potter\'s defeat of You-Know-Who was Black\'s downfall as well. And the Azkban guards heard Black muttering in his sleep, "He\'s at Hogwarts...he\'s at Hogwarts."

                Harry Potter isn\'t safe, not even within the walls of his magical school, surrounded by his friends. Because on top of it all, there may well be a traitor in their midst.',
        	'pages' => '435',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51gY5jzz3NL._SX340_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Goblet of Fire',
        	'author' => 'J.K. Rowling',
        	'published' => '2000',
        	'pages' => '734',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51gy%2Bg8Z%2B1L._SX343_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Order of the Phoenix',
        	'author' => 'J.K. Rowling',
        	'published' => '2003',
        	'pages' => '870',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51Nex9f38rL._SX322_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Half-Blood Prince',
        	'author' => 'J.K. Rowling',
        	'published' => '2005',
        	'pages' => '652',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51NbOxBO%2BBL._SX346_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Deathly Hallows',
        	'author' => 'J.K. Rowling',
        	'published' => '2007',
        	'pages' => '759',
            'img_url' => 'https://images-na.ssl-images-amazon.com/images/I/51E7NvVLO9L._SX346_BO1,204,203,200_.jpg',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Game of Thrones',
        	'author' => 'George R.R. Martin',
        	'published' => '1996',
        	'pages' => '694',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Clash of Kings',
        	'author' => 'George R.R. Martin',
        	'published' => '1999',
        	'pages' => '768',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Storm of Swords',
        	'author' => 'George R.R. Martin',
        	'published' => '2000',
        	'pages' => '992',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Feast for Crows',
        	'author' => 'George R.R. Martin',
        	'published' => '2005',
        	'pages' => '784',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'A Dance With Dragons',
        	'author' => 'George R.R. Martin',
        	'published' => '2011',
        	'pages' => '1040',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Fellowship of the Ring',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1954',
        	'pages' => '432',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Two Towers',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1954',
        	'pages' => '352',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Return of the King',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1955',
        	'pages' => '432',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Hobbit',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1937',
        	'pages' => '300',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'The Silmarillion',
        	'author' => 'J.R.R. Tolkien',
        	'published' => '1977',
        	'pages' => '384',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}

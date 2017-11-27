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
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

         DB::table('books')->insert([
        	'title' => 'Harry Potter and the Chamber of Secrets',
        	'author' => 'J.K. Rowling',
        	'published' => '1998',
        	'pages' => '341',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Prisoner of Azkaban',
        	'author' => 'J.K. Rowling',
        	'published' => '1999',
        	'pages' => '435',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Goblet of Fire',
        	'author' => 'J.K. Rowling',
        	'published' => '2000',
        	'pages' => '734',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Order of the Phoenix',
        	'author' => 'J.K. Rowling',
        	'published' => '2003',
        	'pages' => '870',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Half-Blood Prince',
        	'author' => 'J.K. Rowling',
        	'published' => '2005',
        	'pages' => '652',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Deathly Hallows',
        	'author' => 'J.K. Rowling',
        	'published' => '2007',
        	'pages' => '759',
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

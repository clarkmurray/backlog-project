<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BookUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_user')->insert([
        	'book_id' => 1,
        	'user_id' => 1,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 2,
        	'user_id' => 1,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 3,
        	'user_id' => 1,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 4,
        	'user_id' => 1,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 5,
        	'user_id' => 1,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 6,
        	'user_id' => 1,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 7,
        	'user_id' => 1,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 8,
        	'user_id' => 2,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 9,
        	'user_id' => 2,
            'is_finished' => false,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 10,
        	'user_id' => 2,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 11,
        	'user_id' => 2,
            'is_finished' => false,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 12,
        	'user_id' => 2,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 13,
        	'user_id' => 3,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 14,
        	'user_id' => 3,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 15,
        	'user_id' => 3,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 16,
        	'user_id' => 3,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 17,
        	'user_id' => 3,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 16,
        	'user_id' => 1,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('book_user')->insert([
        	'book_id' => 16,
        	'user_id' => 2,
            'is_finished' => false,
            'read_again' => false,
            'times_read' => 0,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}

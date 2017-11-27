<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
	        'name' => 'Clark',
	        'email' => 'clarkamurray@gmail.com',
	        'password' => bcrypt('password'),
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      	]);

      	DB::table('users')->insert([
	        'name' => 'Andrew',
	        'email' => 'andrew@gmail.com',
	        'password' => bcrypt('password'),
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      	]);

      	DB::table('users')->insert([
	        'name' => 'Murray',
	        'email' => 'murray@gmail.com',
	        'password' => bcrypt('password'),
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      	]);
    }
}

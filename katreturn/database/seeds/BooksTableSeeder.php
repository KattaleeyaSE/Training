<?php

use Illuminate\Database\Seeder;

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
              [
                  'id' => 1, 
                  'name' => 'book name1',
                  'detail' => 'book detail',
                  'rate' => '1',
              ],              [
                  'id' => 2, 
                  'name' => 'book name2',
                  'detail' => 'book detail',
                  'rate' => '1',
              ],              [
                  'id' => 3, 
                  'name' => 'book name3',
                  'detail' => 'book detail',
                  'rate' => '1',
              ],              [
              		'id' => 4, 
              		'name' => 'book name4',
              		'detail' => 'book detail',
              		'rate' => '1',
              ],
		 ]);
    }
}

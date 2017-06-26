<?php

use Illuminate\Database\Seeder;

class Storedata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         DB::table('stores')->insert([
              [
                  'id' => 1, 
                  'title' => 'book title',
                  'price' => 123,
                  
              ]
              ]);
    }
}

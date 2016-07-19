<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $post = factory('App\Post', 10)->create();
      //  $post = factory('App\Post', 'inactive', 10)->create();

    }
}

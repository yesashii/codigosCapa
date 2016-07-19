<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use PlatziPHP\Post;
use PlatziPHP\User;
use PlatziPHP\Phone;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //User::truncate();
        //Post::truncate();

      /*  factory(PlatziPHP\User::class, 10)->create()->each(function ($user) {
            $post   = factory(Post::class)->make();
            $user->posts()->save($post);
        });
      */


        factory(User::class, 10)->create()->each(function ($user) {
            $phone  = factory(Phone::class)->make();
            $user->phones()->save($phone);
        });


        Model::reguard();
    }
}

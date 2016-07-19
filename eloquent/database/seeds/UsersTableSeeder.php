<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Phone;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Phone::truncate();

        factory(App\User::class, 10)->create()->each(function ($user) {
            $phone = factory(App\Phone::class)->make();
            $user->phones()->save($phone);
        });
        
    }
}

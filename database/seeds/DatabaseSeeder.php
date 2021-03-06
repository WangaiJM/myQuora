<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create()->each(function($user){
            $user->posts()->saveMany(
                factory(App\Question::class, rand(4,7))->make()
            );
        });
    }
}

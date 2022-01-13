<?php

use App\Article;
use App\Item;
use App\User;
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
        $user=factory(User::class)->create();
        factory(Article::class,8)->create(['user_id'=>$user->id])->each(function($articles)
    {
        factory(Item::class,random_int(4,10))->create(['article_id'=>$articles->id]);
    });
    }
}

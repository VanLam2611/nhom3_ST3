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
        factory(App\Models\User::class, 20)->create()->each(function ($user) {
            $user->profile()->save(factory(App\Models\Profile::class)->make());
        });

        factory(App\Models\Category::class, 10)->create();

        factory(App\Models\Tag::class, 20)->create();

        factory(App\Models\Comment::class, 60)->create();

        factory(App\Models\Article::class, 50)->create()->each(function ($article) {
            $ids = range(1, 50);
            shuffle($ids);
            $sliced = array_slice($ids, 1, 20);
            $article->tags()->attach($sliced);
            $article->comments()->attach($sliced);
        });

    }
}

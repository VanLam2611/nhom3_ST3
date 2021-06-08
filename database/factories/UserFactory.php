<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'title' => $faker->sentence,
        'content' => $faker->paragraph(random_int(3, 5))
    ];
});

$factory->define(App\Models\Profile::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'facebookUsername' => $faker->text(20),
        'address' => $faker->city,
        'bio' => $faker->paragraph(random_int(3, 5))
    ];
});

$factory->define(App\Models\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10)
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10)
    ];
});

$factory->define(App\Models\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'description' => $faker->text(100)
    ];
});

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->biasedNumberBetween(
            $min = 1,
            $max = 30,
            $function = 'sqrt'
        ),
        'article_id' => $faker->biasedNumberBetween(
            $min = 1,
            $max = 30,
            $function = 'sqrt'
        ),
        'content' => $faker->paragraph(random_int(3, 5)),
        'commentable_id' => $faker->randomDigit,
        'commentable_type' => function () {
            $input = ['App\Models\Profile', 'App\Models\Article'];
            $model = $input[mt_rand(0, count($input) - 1)];
            return $model;
        }
    ];
});

<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
//#########USERS#########

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\User::class, "editor", function ($faker) use ($factory) {
    $user = $factory->raw(App\User::class);
    return array_merge(["role" => "editor"]);
});

//#########BLOG POSTS#########

$factory->define(App\BlogPost::class, function($faker) {
   return [
       "title" => $faker->word,
       "body" => $faker->paragraph,
       "user_id" => $faker->randomDigitNotNull,
       "created_at" => $faker->dateTime,
       "updated_at" => $faker->dateTime
   ];
});
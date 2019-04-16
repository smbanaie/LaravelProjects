<?php
/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'user_id' => factory('App\User')->create()->id,
    ];
});

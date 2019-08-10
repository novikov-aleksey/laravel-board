<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence,
        'completed' => false,
        'project_id' => factory(\App\Project::class)->create()
    ];
});
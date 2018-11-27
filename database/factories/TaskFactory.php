<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Model\Task::class, function (Faker $faker) {
    $toDay      = Carbon::now();
    $start_date = $toDay->format('Y-m-d');
    $end_date   = $toDay->addDays(2)->format('Y-m-d');
    $status     = [0, 1, 2, 3, 4];
    return [
        'name'           => $faker->name,
        'description'    => $faker->text(250),
        'start_date'     => $start_date,
        'end_date'       => $end_date,
        'status'         => $faker->randomElement($status, 1),
        'assign_user_id' => 1,
        'create_by'      => 1
    ];
});
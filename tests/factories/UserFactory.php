<?php

$factory('App\User',
    [
        'name' => $faker->name,
        'email'=> $faker->email,
        'password' => bcrypt('secret'),
        'created_at' => $faker->dateTimeThisDecade
    ]
);
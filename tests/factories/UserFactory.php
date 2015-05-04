<?php
/** @var Closure $factory */
$factory('App\User',
         [
             'name'       => $faker->name,
             'email'      => $faker->unique()->email,
             'password'   => bcrypt('secret'),
             'created_at' => $faker->dateTimeThisDecade
         ]);
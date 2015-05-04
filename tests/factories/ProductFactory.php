<?php


/** @var Closure $factory */
$factory('App\Product',
         [
             'name'        => $faker->word,
             'stock'       => $faker->numberBetween(0, 100),
             'price'       => $faker->randomFloat(2, 5, 100),
             'category_id' => 'factory:App\Category'
         ]);
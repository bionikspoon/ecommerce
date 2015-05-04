<?php


$factory('App\OrderItem',
    function ($faker) {
        return [
            'order_id'   => 'factory:App\Order',
            'product_id' => 'factory:App\Product',
            'price'      => $faker->randomFloat(2, 5, 999),
            'quantity'   => $faker->numberBetween(1, 5)
        ];
    });
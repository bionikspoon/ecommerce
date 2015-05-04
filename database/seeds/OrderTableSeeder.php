<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class OrderTableSeeder extends Seeder
{

    public function run()
    {
        TestDummy::times(20)->create('App\Order');
    }

}
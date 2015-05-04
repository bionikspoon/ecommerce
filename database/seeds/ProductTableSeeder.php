<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        TestDummy::times(100)->create('App\Product');
    }

}
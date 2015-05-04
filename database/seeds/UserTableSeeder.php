<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        TestDummy::times(50)->create('App\User');

        if (!\App\User::where('email', 'user@fake.com')->get()) {

            TestDummy::create('App\User', ['email' => 'user@fake.com']);
            TestDummy::create('App\User', ['email' => 'admin@fake.com']);
        }
    }

}
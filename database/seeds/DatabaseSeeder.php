<?php

use Illuminate\Database\Seeder;
use PharIo\Manifest\Email;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')-> create([
            'name'=>'assia',
            'email'=>'random@gmail.com',
            'password'=>bcrypt('notsecure'),
        ]);


        // $this->call(UserSeeder::class);
        }
}

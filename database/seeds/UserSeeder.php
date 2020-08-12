<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin user
        $admin = factory(User::class)->create([
            'name' => 'admin',
            'email' => 'admin@amel.dev',
        ]);
        $admin->assignRole('Admin');
        $worker = factory(User::class)->create([
            'name' => 'worker',
            'email' => 'worker@gmail.com',
            'password' => bcrypt('notsecure'),
        ]);
        factory(User::class, 50)->create();
    }
}

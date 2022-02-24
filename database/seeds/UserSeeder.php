<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(): void
	{
		// Admin user
		$admin = User::factory()->create([
			'name' => 'admin',
			'email' => 'admin@dlala.test',
		]);
		$admin->assignRole('Admin');
		$worker = User::factory()->create([
			'name' => 'worker',
			'email' => 'worker@gmail.com',
		]);
		$worker->assignRole('Worker');
		User::factory(50)->create();
	}
}

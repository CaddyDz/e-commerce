<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\{Permission, Role};

class RolesAndPermissionsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Reset cached roles and permissions
		app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

		$role = Role::create(['name' => 'Admin']);
		Permission::create(['name' => 'Print']);
		$access = Permission::create(['name' => 'Access Admin panel']);
		$role->givePermissionTo(Permission::all());
		$worker = Role::create(['name' => 'Worker']);
		$worker->givePermissionTo($access);
	}
}

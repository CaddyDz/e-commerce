<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
		$role->givePermissionTo(Permission::all());
		Role::create(['name' => 'Worker']);
	}
}

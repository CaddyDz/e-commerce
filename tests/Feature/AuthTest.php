<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class AuthTest extends TestCase
{
	/**
	 * Test login
	 *
	 * @return void
	 */
	public function test_login(): void
	{
		$user = create(User::class);
		$this->post('/login', [
			'email' => $user->email,
			'password' => 'password',
		]);

		$this->assertAuthenticatedAs($user);
	}
}

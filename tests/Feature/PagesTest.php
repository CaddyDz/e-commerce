<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
	private array $static_routes = [
		'/',
		'/login',
		'/register',
		'/cart',
		'/checkout',
		'/faq',
		'/shipping',
		'/about',
	];

	/**
	 * Assert OK status on static pages.
	 *
	 * @return void
	 */
	public function test_static_pages(): void
	{
		foreach ($this->static_routes as $route) {
			$response = $this->get($route);
			$response->assertOk();
		}
	}

	/**
	 * Assert OK status on home page.
	 *
	 * @return void
	 */
	public function test_home_page(): void
	{
		$this->login();
		$response = $this->get('/home');

		$response->assertOk();
	}
}

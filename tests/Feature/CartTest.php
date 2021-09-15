<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\{RefreshDatabase, WithFaker};

class CartTest extends TestCase
{
	/**
	 * Assert we can access cart content.
	 *
	 * @return void
	 */
	public function test_cart_content(): void
	{
		$response = $this->get('/');

		$response->assertStatus(200);
	}
}

<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckoutTest extends TestCase
{
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function testExample()
	{
		$response = $this->get('/');

		$response->assertStatus(200);
	}
}

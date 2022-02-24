<?php

declare(strict_types=1);

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\{RefreshDatabase, TestCase as BaseTestCase};

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    /**
     * Set the currently logged in user for the application.
     *
     * @param Illuminate\Contracts\Auth\Authenticatable
     *
     * @return App\Models\User authenticated
    */
    protected function login($user = null)
    {
        $user = $user ?: User::factory()->create();
        $this->be($user);

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
	use HandlesAuthorization;

	/**
	 * Determine whether the user can view any models.
	 *
	 * @param \App\User $user the request performer.
	 *
	 * @return bool
	 */
	public function viewAny(User $user): bool
	{
		return true;
	}

	/**
	 * Determine whether the user can view the model.
	 *
	 * @param \App\User $user the request performer.
	 * @param \App\User $model the action target user model.
	 *
	 * @return bool
	 */
	public function view(User $user, User $model): bool
	{
		return true;
	}

	/**
	 * Determine whether the user can create models.
	 *
	 * @param \App\User $user the request performer.
	 * 
	 * @return bool
	 */
	public function create(User $user): bool
	{
		return $user->hasRole('Admin');
	}

	/**
	 * Determine whether the user can update the model.
	 *
	 * @param \App\User $user the request performer.
	 * @param \App\User $model the action target user model.
	 *
	 * @return bool
	 */
	public function update(User $user, User $model): bool
	{
		return $user->hasRole('Admin');
	}

	/**
	 * Determine whether the user can delete the model.
	 *
	 * @param \App\User $user the request performer.
	 * @param \App\User $model the action target user object.
	 *
	 * @return bool
	 */
	public function delete(User $user, User $model): bool
	{
		return $user->hasRole('Admin');
	}

	/**
	 * Determine whether the user can restore the model.
	 *
	 * @param \App\User $user the request performer.
	 * @param \App\User $model the action target user object.
	 *
	 * @return bool
	 */
	public function restore(User $user, User $model): bool
	{
		return $user->hasRole('Admin');
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 *
	 * @param \App\User $user the request performer.
	 * @param \App\User $model the action target user object. 
	 *
	 * @return bool
	 */
	public function forceDelete(User $user, User $model): bool
	{
		return $user->hasRole('Admin');
	}
}

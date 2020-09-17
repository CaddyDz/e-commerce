<?php

declare(strict_types=1);

namespace App\Nova;

use Laravel\Nova\Http\Requests\NovaRequest;

class Worker extends User
{
	/**
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label(): string
	{
		return __('Workers');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel(): string
	{
		return __('Worker');
	}

	/**
	 * Build an "index" query for the given resource.
	 *
	 * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
	 * @param  \Illuminate\Database\Eloquent\Builder  $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function indexQuery(NovaRequest $request, $query)
	{
		return $query->role('Worker');
	}
}

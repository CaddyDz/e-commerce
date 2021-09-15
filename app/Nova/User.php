<?php

declare(strict_types=1);

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\{ID, Password, Text};
use Vyuldashev\NovaPermission\{PermissionBooleanGroup, RoleBooleanGroup};

class User extends Resource
{
	public static $priority = 10;
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\User';

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'name';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'id', 'name', 'email',
	];

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			ID::make()->sortable(),

			Text::make(__('Name'), 'name')
				->sortable()
				->rules('required', 'max:255'),

			Text::make(__('Email'), 'email')
				->sortable()
				->rules('required', 'email', 'max:254')
				->creationRules('unique:users,email')
				->updateRules('unique:users,email,{{resourceId}}'),

			Password::make(__('Password'), 'password')
				->onlyOnForms()
				->creationRules('required', 'string', 'min:8')
				->updateRules('nullable', 'string', 'min:8'),

			Text::make(__('Address'), 'address'),

			Text::make(__('Phone number'), 'phone')->displayUsing(fn($phone) => 0 . $phone),

			RoleBooleanGroup::make('Roles'),

			PermissionBooleanGroup::make('Permissions')->resolveUsing(function ($permissions, $user) {
				$values = [];
				foreach ($user->getAllPermissions() as $item) {
					$values[$item->name] = true;
				}

				return $values;
			}),
		];
	}

	/**
	 * Get the cards available for the request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function cards(Request $request)
	{
		return [];
	}

	/**
	 * Get the filters available for the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function filters(Request $request)
	{
		return [];
	}

	/**
	 * Get the lenses available for the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function lenses(Request $request)
	{
		return [];
	}

	/**
	 * Get the actions available for the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function actions(Request $request)
	{
		return [];
	}
}

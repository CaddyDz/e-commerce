<?php

namespace App\Nova;

use NovaIcon\Icon;
use Timothyasp\Badge\Badge;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use App\Nova\Filters\OrderStatus;
use Laravel\Nova\Fields\BelongsTo;
use App\Nova\Lenses\OrdersRejected;
use App\Nova\Lenses\OrdersSuspended;
use App\Nova\Lenses\OrdersValidated;
use App\Nova\Lenses\OrdersAwaitingReview;
use Laravel\Nova\Fields\Select;

class Order extends Resource
{
	/**
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label(): string
	{
		return __('Orders');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel(): string
	{
		return __('Order');
	}

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\Order';

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'id';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'id',
	];


	/**
	 * Get a fresh instance of the model represented by the resource.
	 */
	public static function newModel()
	{
		$model = static::$model;
		$order = new $model;
		// Set the dafault value for the reception date
		$order->status = 'pending';

		return $order;
	}

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
			Icon::make('')
				->icon(
					fn (): string => $this->icon
				)->css(function () {
					$options = [
						'pending' => 'text-info',
						'validated' => 'text-success',
						'rejected' => 'text-danger',
						'suspended' => 'text-black',
					];

					return $options[$this->status];
				})->exceptOnForms(),
			Select::make(__('Status'), 'status')
				->options([
					'pending' => __('Awaiting review'),
					'validated' => __('Validated'),
					'rejected' => __('Refused'),
					'suspended' => __('On hold'),
				])->onlyOnForms()->displayUsingLabels(),
			Badge::make(__('Status'), 'status')
				->options([
					'pending' => __('Awaiting review'),
					'validated' => __('Validated'),
					'rejected' => __('Refused'),
					'suspended' => __('On hold'),
				])
				->colors([
					'pending' => '#64cedb',
					'validated' => '#42d6a9',
					'suspended' => '#000',
					'rejected' => '#ca404d',
				])->displayUsingLabels()
				->sortable()
				->exceptOnForms(),
			BelongsTo::make(__('Reviewer'), 'reviewer', 'App\Nova\User')->sortable()
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
		return [
			new OrderStatus(),
		];
	}

	/**
	 * Get the lenses available for the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function lenses(Request $request)
	{
		return [
			new OrdersAwaitingReview(),
			new OrdersValidated(),
			new OrdersRejected(),
			new OrdersSuspended()
		];
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

	/**
	 * The icon of the resource.
	 *
	 * @return string
	 */
	public static function icon()
	{
		return view('nova::svg.icon-order')->render();
	}
}

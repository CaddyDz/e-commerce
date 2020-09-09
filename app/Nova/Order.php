<?php

namespace App\Nova;

use App\Nova\Filters\OrdersByWorker;
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
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

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
			BelongsTo::make(__('Reviewer'), 'reviewer', 'App\Nova\User')->sortable(),
			Text::make(__('Last Name'), 'lastname'),
			Text::make(__('First Name'), 'firstname'),
			Text::make(__('Address 1'), 'address1'),
			Text::make(__('Address 2'), 'address2')->hideFromIndex(),
			Text::make(__('Town'), 'town')->hideFromIndex(),
			Text::make(__('Zip Code'), 'zip')->hideFromIndex(),
			Text::make(__('District'), 'district')->hideFromIndex(),
			Text::make(__('Email'), 'email')->hideFromIndex(),
			Text::make(__('Phone Number'), 'phone'),
			Textarea::make(__('Notes'), 'notes')->hideFromIndex(),
			BelongsToMany::make(__('Products'), 'products', Product::class)->fields(function () {
				return [
					Number::make(__('Quantity'), 'quantity'),
				];
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
		return [
			new OrderStatus(),
			new OrdersByWorker()
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

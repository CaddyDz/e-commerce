<?php

declare(strict_types=1);

namespace App\Nova\Lenses;

use App\Order;
use NovaButton\Button;
use Illuminate\Http\Request;
use Laravel\Nova\Lenses\Lens;
use Laravel\Nova\Http\Requests\LensRequest;
use Laravel\Nova\Fields\{BelongsTo, ID, Stack, Text, Textarea};

class OrdersSuspended extends Lens
{
	/**
	 * The displayable name of the lens.
	 *
	 * @var string
	 */
	public $name = 'Commandes En Attentes';

	/**
	 * Get the query builder / paginator for the lens.
	 *
	 * @param  \Laravel\Nova\Http\Requests\LensRequest  $request
	 * @param  \Illuminate\Database\Eloquent\Builder  $query
	 * @return mixed
	 */
	public static function query(LensRequest $request, $query)
	{
		return $request->withOrdering($request->withFilters(
			$query->select(self::columns())
				->where('status', 'suspended')
		));
	}

	/**
	 * Get the columns that should be selected.
	 *
	 * @return array
	 */
	protected static function columns()
	{
		return [
			'orders.id',
			'orders.firstname',
			'orders.lastname',
			'orders.phone',
			'orders.address1',
			'orders.address2',
			'orders.town',
			'orders.district',
			'orders.notes',
			'orders.reviewer_id',
			'orders.shipping_cost',
		
		];
	}

	/**
	 * Get the fields available to the lens.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			ID::make('ID', 'id'),
			BelongsTo::make(__('Reviewer'), 'reviewer', 'App\Nova\User')->sortable(),
			Button::make(__('Validate'), 'validate-order')->reload()->style('success'),
			Button::make(__('Reject'), 'reject-order')->reload()->style('danger'),
			Stack::make(__('Client'), [
				Text::make(__('Last Name'), 'lastname'),
				Text::make(__('First Name'), 'firstname'),
				Text::make(__('Phone Number'), 'phone'),
				Text::make(__('Address 1'), 'address1'),
				Text::make(__('Address 2'), 'address2'),
				Text::make(__('Town'), 'town'),
				Text::make(__('District'), 'district'),
				Text::make(__('Shipping'), 'shipping_cost'),
				Textarea::make(__('Notes'), 'notes'),
			]),
			Stack::make(__('Products'), $this->products()),
		];
	}

	public function products()
	{
		$products = [];
		if (optional($this->resource)->id) {
			$order = Order::find($this->resource->id);
			foreach ($order->products as $product) {
				$products[] = Text::make(__('Name'), fn () => $product->name);
				$products[] = Text::make(__('Price'), fn () => $product->price);
				$products[] = Text::make(__('Quantity'), fn () => $product->pivot->quantity);
				$products[] = Text::make(__('Color'), fn () => color($product->pivot->color));
				$products[] = Text::make(__('Size'), fn () => size($product->pivot->size));
				$products[] = Text::make(__('Age'), fn () => age($product->pivot->age));
			}
		}
		return $products;
	}

	/**
	 * Get the cards available on the lens.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function cards(Request $request)
	{
		return [];
	}

	/**
	 * Get the filters available for the lens.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function filters(Request $request)
	{
		return [];
	}

	/**
	 * Get the actions available on the lens.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function actions(Request $request)
	{
		return parent::actions($request);
	}

	/**
	 * Get the URI key for the lens.
	 *
	 * @return string
	 */
	public function uriKey()
	{
		return 'orders-suspended';
	}
}

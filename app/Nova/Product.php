<?php

declare(strict_types=1);

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Timothyasp\Color\Color;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class Product extends Resource
{
	public static $priority = 4;
	/**
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label(): string
	{
		return __('Products');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel(): string
	{
		return __('Product');
	}

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\Product';

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
		'id', 'name', 'description', 'price'
	];

	/**
	 * Get a fresh instance of the model represented by the resource.
	 */
	public static function newModel()
	{
		$model = static::$model;
		$product = new $model;
		$product->display_sizes = true;
		$product->display_colors = true;
		$product->display_age = true;

		return $product;
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
			BelongsTo::make(__('Brand'), 'brand', Brand::class)->required(),
			Text::make(__('Name'), 'name')->required(),
			Trix::make(__('Description'), 'description')->required(),
			BelongsToMany::make(__('Sizes'), 'sizes', Size::class),
			Boolean::make(__('Display Sizes'), 'display_sizes')->hideFromIndex(),
			Boolean::make(__('Display Colors'), 'display_colors')->hideFromIndex(),
			Boolean::make(__('Display Age'), 'display_age')->hideFromIndex(),
			BelongsToMany::make(__('Ages'), 'ages', Age::class),
			Number::make(__('Price'), 'price')->required(),
			Avatar::make(__('Image'), 'image')->required(),
			Boolean::make(__('Available'), 'available'),
			Images::make(__('Images'), 'images')->hideFromIndex(),
			BelongsToMany::make(__('Orders'), 'orders', Order::class)->fields(function () {
				return [
					Number::make(__('Quantity'), 'quantity'),
					Text::make(__('Size'), fn ($pivot) => $pivot->size ? size($pivot->size) : null),
					Color::make(__('Color'), fn ($pivot) => $pivot->color ? color($pivot->color) : null),
				];
			})->hideFromDetail(),
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

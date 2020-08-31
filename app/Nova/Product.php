<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\KeyValue;

class Product extends Resource
{
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
	 * Get the fields displayed by the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			ID::make()->sortable(),
			BelongsTo::make(__('Brand'), 'brand', Brand::class),
			Text::make(__('Name'), 'name')->required(),
			Textarea::make(__('Description'), 'description'),
			BelongsToMany::make(__('Sizes'), 'sizes', Size::class),
			BelongsToMany::make(__('Colors'), 'colors', Color::class),
			KeyValue::make(__('Properties'), 'properties'),
			Number::make(__('Price'), 'price')->required(),
			Avatar::make(__('Image'), 'image'),
			Boolean::make(__('Available'), 'available'),
			Images::make(__('Images'), 'images')->hideFromIndex(),
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

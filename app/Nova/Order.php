<?php

declare(strict_types=1);

namespace App\Nova;

use NovaIcon\Icon;
use NovaButton\Button;
use Timothyasp\Badge\Badge;
use Illuminate\Http\Request;
use App\Models\Order as ModelsOrder;
use App\Nova\Filters\OrdersByWorker;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Nova\Actions\{ChangeOrderStatus, PrintOrder};
use App\Nova\Lenses\{OrdersRejected, OrdersSuspended, OrdersValidated};
use Laravel\Nova\Fields\{BelongsTo, BelongsToMany, ID, Number, Select, Stack, Text, Textarea};

class Order extends Resource
{
    /**
     * The visual style used for the table. Available options are 'tight' and 'default'.
     *
     * @var string
     */
    public static $tableStyle = 'tight';

    public static $priority = 1;

    /**
     * Build an "index" query for the given resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Whether to show borders for each column on the X-axis.
     *
     * @var bool
     */
    public static $showColumnBorders = true;

    /**
     * Indicates whether Nova should prevent the user from leaving an unsaved form, losing their data.
     *
     * @var bool
     */
    public static $preventFormAbandonment = true;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = ModelsOrder::class;

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
        'id', 'phone', 'lastname',
    ];

    public static $searchRelations = [
        'products' => ['name'],
        'reviewer' => ['name'],
    ];

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
     * @param \Illuminate\Http\Request $request
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
                })->exceptOnForms()->hideFromIndex(),
            Select::make(__('Status'), 'status')
                ->options([
                    'pending' => __('Awaiting review'),
                    'validated' => __('Validated'),
                    'rejected' => __('Refused'),
                    'suspended' => __('On hold'),
                ])->onlyOnForms()->displayUsingLabels()->hideFromIndex(),
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
                ->exceptOnForms()->hideFromIndex(),

            BelongsTo::make(__('Reviewer'), 'reviewer', 'App\Nova\User')->sortable()->hideFromIndex(),
            Button::make(__('Validate'), 'validate-order')->reload()->style('success'),
            Button::make(__('Suspend'), 'suspend-order')->reload()->style('warning'),
            Button::make(__('Reject'), 'reject-order')->reload()->style('danger'),
            Text::make(__('Address 2'), 'address2')->hideFromIndex(),
            Text::make(__('Town'), 'town')->hideFromIndex(),
            Text::make(__('Zip Code'), 'zip')->hideFromIndex(),
            Text::make(__('District'), 'district')->hideFromIndex(),
            Text::make(__('Email'), 'email')->hideFromIndex(),
            Textarea::make(__('Notes'), 'notes')->hideFromIndex(),
            BelongsToMany::make(__('Products'), 'products', Product::class)->fields(function () {
                return [
                    Number::make(__('Quantity'), 'quantity'),
                    Text::make(__('Size'), 'size'),
                ];
            }),
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

    public function products(): array
    {
        $products = [];
        foreach ($this->products as $product) {
            $products[] = Text::make(__('Name'), fn () => $product->name);
            $products[] = Text::make(__('Price'), fn () => $product->price);
            $products[] = Text::make(__('Quantity'), fn () => $product->pivot->quantity);
            $products[] = Text::make(__('Color'), fn () => color($product->pivot->color));
            $products[] = Text::make(__('Size'), fn () => size($product->pivot->size));
            $products[] = Text::make(__('Age'), fn () => age($product->pivot->age));
        }
        return $products;
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request): array
    {
        return [
            new OrdersByWorker()
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request): array
    {
        return [
            new OrdersValidated,
            new OrdersRejected,
            new OrdersSuspended,
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request): array
    {
        return [
            new PrintOrder,
            new ChangeOrderStatus(),
        ];
    }

    /**
     * The icon of the resource.
     *
     * @return string
     */
    public static function icon(): string
    {
        return view('nova::svg.icon-order')->render();
    }
}

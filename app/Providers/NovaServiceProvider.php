<?php

declare(strict_types=1);

namespace App\Providers;

use App\Exceptions\Handler;
use KABBOUCHI\LogsTool\LogsTool;
use Illuminate\Support\Facades\Gate;
use Zoxta\NovaCloudflareCard\NovaCloudflareCard;
use Laravel\Nova\Exceptions\NovaExceptionHandler;
use Laravel\Nova\{Nova, NovaApplicationServiceProvider};
use Tightenco\NovaGoogleAnalytics\{MostVisitedPagesCard, PageViewsMetric, VisitorsMetric};

class NovaServiceProvider extends NovaApplicationServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(): void
	{
		Nova::serving(fn () => Nova::style('dlala', resource_path('css/theme.css')));
		Nova::sortResourcesBy(fn ($resource) => $resource::$priority ?? 9999);
		parent::boot();
	}

	/**
	 * Register the Nova routes.
	 *
	 * @return void
	 */
	protected function routes(): void
	{
		Nova::routes()
			->withAuthenticationRoutes()
			->register();
	}

	/**
	 * Register the Nova gate.
	 *
	 * This gate determines who can access Nova in non-local environments.
	 *
	 * @return void
	 */
	protected function gate(): void
	{
		Gate::define('viewNova', fn ($user): bool => $user->hasPermissionTo('Access Admin panel'));
	}

	/**
	 * Get the cards that should be displayed on the default Nova dashboard.
	 *
	 * @return array
	 */
	protected function cards(): array
	{
		return [
			new PageViewsMetric,
			new VisitorsMetric,
			new NovaCloudflareCard(),
			new MostVisitedPagesCard,
		];
	}

	/**
	 * Register Nova's custom exception handler.
	 *
	 * @return void
	 */
	protected function registerExceptionHandler()
	{
		$this->app->bind(NovaExceptionHandler::class, Handler::class);
	}

	/**
	 * Get the extra dashboards that should be displayed on the Nova dashboard.
	 *
	 * @return array
	 */
	protected function dashboards()
	{
		return [];
	}

	/**
	 * Get the tools that should be listed in the Nova sidebar.
	 *
	 * @return array
	 */
	public function tools()
	{
		return [
			\Vyuldashev\NovaPermission\NovaPermissionTool::make()->canSee(fn ($request) => $request->user()->hasRole('Admin')),
			LogsTool::make()->canSee(fn ($request) => $request->user()->hasRole('Admin')),
		];
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}

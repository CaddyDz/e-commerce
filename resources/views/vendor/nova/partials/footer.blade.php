<p class="mt-8 text-center text-xs text-80">
	<a href="{{ config('app.url') }}" class="text-primary dim no-underline">
		{{ config('app.name') }}
	</a>
	<span class="px-1">&middot;</span>
	&copy; {{ date('Y') }} Designed by <a class="text-primary dim no-underline" href="https://sitando.com">Sitando</a>
	<span class="px-1">&middot;</span>
	v{{ \Laravel\Nova\Nova::version() }}
</p>

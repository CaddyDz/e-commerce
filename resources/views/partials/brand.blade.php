<div class="col">
	<div class="category-banner1">
		<div class="inner">
			<a href="{{ route('brand', ['brand' => $brand]) }}" class="image">
				<img src="{{ secure_asset('storage/' . $brand->logo) }}" alt="@lang('Brand Logo')">
			</a>
			<div class="content">
				<h3 class="title">
					<a href="{{ route('brand', ['brand' => $brand]) }}">
						{{ $brand->name }}
					</a>
					<span class="number">{{ $brand->products()->count() }}</span>
				</h3>
			</div>
		</div>
	</div>
</div>

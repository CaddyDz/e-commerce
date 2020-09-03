<!-- Deal of the Day Section Start -->
<div class="section section-fluid section-padding" data-bg-color="#f4f3ec">
	<div class="container">
		<div class="row align-items-center learts-mb-n30">

			<div class="col-lg-6 col-12 learts-mb-30">
				<div class="product-deal-image text-center">
					<img src="{{ secure_asset('storage/' . $deal->product->image) }}" alt="{{ $deal->product->name }}">
				</div>
			</div>

			<div class="col-lg-6 col-12 learts-mb-30">
				<div class="product-deal-content">
					<h2 class="title">@lang('Deal of the day')</h2>
					<div class="desc">
						<p>{{ $deal->product->description }}</p>
					</div>
					<div class="countdown1" data-countdown="{{ $deal->expires_at->format('Y/m/d') }}"></div>
					<a href="{{ route('product', ['product' => $deal->product]) }}" class="btn btn-dark btn-hover-primary">
						@lang('Shop Now')
					</a>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Deal of the Day Section End -->

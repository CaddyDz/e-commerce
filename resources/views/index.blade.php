@extends('layouts.app')


@section('content')
	<!-- Slider main container Start -->
	<div class="home6-slider section">
		<div class="home6-slide-item" data-bg-image="/assets/images/baner.png">
			<div class="container"></div>
		</div>
	</div>
	<!-- Slider main container End -->

	<!-- Category Banner Section Start -->
	<div class="section section-fluid learts-pt-30">
		<div class="container">
			<div class="category-banner1-carousel">
				@foreach ($brands as $brand)
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
				@endforeach
			</div>
		</div>
	</div>
	<!-- Category Banner Section End -->

	<!-- Product Section Start -->
	<div class="section section-padding">
		<div class="container">

			<div class="row learts-mb-50">
				<div class="col">
					<!-- Section Title Start -->
					<div class="section-title text-center mb-0">

						<h2 class="title title-icon-both">Nos Partenaires :</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>
		</div>
	</div>


	@include('partials.deal_of_the_day')

	<!-- Instagram Section Start -->
	<div class="section section-fluid section-padding pt-0">
		<div class="container">

			<!-- Section Title Start -->
			<div class="section-title2 text-center">
				<h3 class="sub-title">@lang('Follow us on Instagram')</h3>
				<h2 class="title">@dlaladz_shop</h2>
			</div>
			<!-- Section Title End -->

			<div id="instagram-feed221" class="instagram-carousel instagram-carousel1 instagram-feed">
			</div>

		</div>
	</div>
	<!-- Instagram Section End -->
@stop

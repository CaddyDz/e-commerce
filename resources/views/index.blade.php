@extends('layouts.app')


@section('content')
	<!-- Slider main container Start -->
	<div class="home6-slider section">
		<div class="home6-slide-item" data-bg-image="assets/images/baner.jpg">
			<div class="container">
				
			</div>
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


	<!-- Deal of the Day Section Start -->
	<div class="section section-fluid section-padding" data-bg-color="#f4f3ec">
		<div class="container">
			<div class="row align-items-center learts-mb-n30">

				<div class="col-lg-6 col-12 learts-mb-30">
					<div class="product-deal-image text-center">
						<img src="assets/images/product/deal-product-2.png" alt="">
					</div>
				</div>

				<div class="col-lg-6 col-12 learts-mb-30">
					<div class="product-deal-content">
						<h2 class="title">Deal of the day</h2>
						<div class="desc">
							<p>Years of experience brought about by our skilled craftsmen could ensure that every piece produced is a work of art. Our focus is always the best quality possible.</p>
						</div>
						<div class="countdown1" data-countdown="2021/01/01"></div>
						<a href="shop.html" class="btn btn-dark btn-hover-primary">Shop Now</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Deal of the Day Section End -->

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

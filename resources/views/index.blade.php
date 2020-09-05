@extends('layouts.app')

@section('title', __('Home'))

@section('content')
	<!-- Slider main container Start -->
	<div class="home6-slider section">
		<div class="home6-slide-item">
			<div class="container"></div>
		</div>
	</div>
	<!-- Slider main container End -->

	<!-- Category Banner Section Start -->

	<div class="row learts-mb-50">
				<div class="col">
					<!-- Section Title Start -->
					<div></div>
					<div class="section-title text-center mb-0">

						<h2 class="title title-icon-both">Nos Partenaires :</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>
	<div class="section section-fluid learts-pt-30">
		<div class="container">
			<div class="category-banner1-carousel">
				@foreach ($brands as $brand)
					@include('partials.brand')
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

						
					</div>
					<!-- Section Title End -->
				</div>
			</div>
		</div>
	</div>


	@includeWhen($deal, 'partials.deal_of_the_day')

	<!-- Instagram Section Start -->
	<div class="section section-fluid section-padding pt-0">
		<div class="container">

			<!-- Section Title Start -->
			<div class="section-title2 text-center">
				<h3 class="sub-title">@lang('Follow us on Instagram')</h3>
				<h2 class="title">@</h2>
			</div>
			<!-- Section Title End -->

			<!--<div id="instagram-feed221" class="instagram-carousel instagram-carousel1 instagram-feed">-->
			</div>

		</div>
	</div>
	<!-- Instagram Section End -->
@stop

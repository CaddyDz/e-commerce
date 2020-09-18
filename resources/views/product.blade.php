@extends('layouts.app')

@section('title', $product->name)

@section('content')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="page-title">
					<h1 class="title">@lang('Shop')</h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">@lang('Home')</a></li>
						<li class="breadcrumb-item">@lang('Products')</li>
						<li class="breadcrumb-item active">{{ $product->name }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Title/Header End -->

<!-- Single Products Section Start -->
<div class="section section-padding border-bottom">
	<div class="container">
		<div class="row learts-mb-n40">

			<!-- Product Images Start -->
			<div class="col-lg-6 col-12 learts-mb-40">
				<div class="product-images">
					<div class="product-gallery-slider">
						<div class="product-zoom" data-image="{{ $product->image }}">
							<img src="{{ secure_asset('storage/' . $product->image) }}" alt="@lang('Photo')">
						</div>
						@foreach ($product->images as $image)
							<div class="product-zoom" data-image="{{ $image->getUrl() }}">
								<img src="{{ $image->getUrl() }}" alt="@lang('Photo')">
							</div>
						@endforeach
					</div>
					<div class="product-thumb-slider">
						<div class="item">
							<img src="{{ secure_asset('storage/' . $product->image) }}" alt="@lang('Photo')">
						</div>
						@foreach ($product->images as $image)
							<div class="item">
								<img src="{{ $image->getUrl() }}" alt="@lang('Photo')">
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- Product Images End -->

			<!-- Product Summary Start -->
			<div class="col-lg-6 col-12 learts-mb-40">
				<div class="product-summary">
					@include('partials.product_summary')
				</div>
			</div>
			<!-- Product Summary End -->
		</div>
	</div>
</div>
@stop

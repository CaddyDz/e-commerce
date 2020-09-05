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

			<!-- Product Summery Start -->
			<div class="col-lg-6 col-12 learts-mb-40">
				<div class="product-summery">
					<h3 class="product-title">{{ $product->name }}</h3>
					<div class="product-price">{{ $product->price }} Dzd </div>
					<div class="product-description">
						<p>{{ $product->descrption }}</p>
					</div>
					<div class="product-variations">
						<table>
							<tbody>
								@if($product->display_sizes && $product->sizes->isNotEmpty())
									<tr>
										<td class="label"><span>@lang('Available Sizes')</span></td>
										<td class="value">
											<div class="product-sizes">
												@foreach($product->sizes as $size)
													<a href="#">{{ $size->label }}</a>
												@endforeach
											</div>
										</td>
									</tr>
								@endif
								@if($product->display_colors && $product->colors->isNotEmpty())
									<tr>
										<td class="label"><span>@lang('Available Colors')</span></td>
										<td class="value">
											<div class="product-colors">
												@foreach($product->colors as $color)
													<a href="#" data-bg-color="{{ $color->color }}">
													</a>
												@endforeach
											</div>
										</td>
									</tr>
								@endif
								@if ($product->properties->isNotEmpty())
									@foreach ($product->properties as $property)
									<tr>
										<td class="label">
											<span>
												{{ $property->key }}
											</span>
										</td>
										<td class="value">
											{{ $property->value }}
										</td>
									</tr>
									@endforeach
								@endif
								<tr>
									<td class="label"><span>@lang('Quantity')</span></td>
									<td class="value">
										<div class="product-quantity">
											<span class="qty-btn minus"><i class="ti-minus"></i></span>
											<input type="text" class="input-qty" value="1">
											<span class="qty-btn plus"><i class="ti-plus"></i></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="product-buttons">
						<a href="{{ route('cart.add', ['product' => $product]) }}" class="btn btn-dark btn-outline-hover-dark"><i class="fal fa-shopping-cart"></i> @lang('Add to Cart')</a>
					</div>
					<div class="product-brands">
						<span class="title">@lang('Brands')</span>
						<div class="brands">
							<a href="{{ route('brand', ['brand' => $product->brand]) }}">
								<img src="{{ secure_asset('storage/' . $product->brand->logo) }}" alt="@lang('Brand Logo')">
							</a>
						</div>
					</div>
					<div class="product-meta">
						<table>
							<tbody>
								<tr>
									<td class="label"><span>@lang('Category')</span></td>
									<td class="value">
										<ul class="product-category">
											<li>
												<a href="{{ route('category', ['category' => $product->brand->category]) }}">
													{{ $product->brand->category->name }}
												</a>
											</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Product Summery End -->
		</div>
	</div>
</div>
@stop

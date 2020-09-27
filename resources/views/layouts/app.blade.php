<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ config('app.name') }} | @yield('title')</title>
	<meta name="robots" content="index, follow" />
	<meta name="description" content="Site algerien de vente enligne">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:title" content="@yield('title')">
	<meta property="og:description" content="Site algerien de vente enligne">
	<meta property="og:image" content="{{ secure_asset('/assets/images/logo/logofinal1.png') }}">
	<meta property="og:url" content="{{config('app.url')}}">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">

	<!-- Use the minified version files listed below for better performance and remove the files listed above -->
	<link rel="stylesheet" href="/assets/css/vendor/vendor.min.css">
	<link rel="stylesheet" href="/assets/css/plugins/plugins.min.css">
	<link rel="stylesheet" href="/assets/css/style.min.css">
	<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
</head>

<body>
	@include('layouts.header')
	<!-- OffCanvas Cart Start -->
	<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
		<div class="inner">
			<div class="head">
				<span class="title">@lang('Cart')</span>
				<button class="offcanvas-close">×</button>
			</div>
			<div class="body customScroll">
				<ul class="minicart-product-list">
					@foreach($cart as $item)
						<li>
							<a href="{{ route('product', ['product' => $item->model]) }}" class="image">
								<img src="{{ secure_asset('storage/'. $item->model->image) }}" alt="@lang('Cart product Image')">
							</a>
							<div class="content">
								<a href="{{ route('product', ['product' => $item->model]) }}" class="title">
									{{ $item->model->name }}
								</a>
								<span class="quantity-price">
									{{ $item->qty }} x
									<span class="amount">
										{{ $item->total }}
									</span>
								</span>
								<a href="{{ route('cart.remove', ['product' => $item->rowId]) }}" class="remove" onclick="event.preventDefault();document.getElementById('remove-cart-{{ $item->rowId }}').submit();">
									×
								</a>
								<form action="{{ route('cart.remove', ['product' => $item->rowId]) }}" method="post" style="display: none;" id="remove-cart-{{ $item->rowId }}">
									@csrf
								</form>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
			<div class="foot">
				<div class="sub-total">
					<strong>@lang('Subtotal') :</strong>
					<span class="amount">
						{{ Cart::total() }} DZD
					</span>
				</div>
				<div class="buttons">
					<a href="/cart" class="btn btn-dark btn-hover-primary">@lang('View Cart')</a>
					<a href="/checkout" class="btn btn-outline-dark">@lang('Checkout')</a>
				</div>
			</div>
		</div>
	</div>
	<!-- OffCanvas Cart End -->
	<!-- OffCanvas Search Start -->
	@include('partials.mobile_menu')
	<!-- OffCanvas Search End -->
	<div class="offcanvas-overlay"></div>
	@yield('content')
	@include('layouts.footer')
	<script src="/assets/js/vendor/vendor.min.js"></script>
	<script src="/assets/js/plugins/plugins.min.js"></script>
	<!-- Main Activation JS -->
	<script src="/assets/js/main.js"></script>
	@if(session()->has('confirmed'))
	<script>
		swal("{{ __('Order Confirmed!') }}", "{{ __('Your order has been placed and will be processed shortly.') }}", "success");
	</script>
	@endif
	@stack('scripts')
</body>

</html>

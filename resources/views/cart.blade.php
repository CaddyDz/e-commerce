@extends('layouts.app')

@section('title', __('Cart'))

@section('content')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="page-title">
					<h1 class="title">@lang('Cart')</h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="/">@lang('Home')</a>
						</li>
						<li class="breadcrumb-item active">@lang('Cart')</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Page Title/Header End -->

<!-- Shopping Cart Section Start -->
<div class="section section-padding">
	<div class="container">
		<form class="cart-form" action="#">
			<table class="cart-wishlist-table table">
				<thead>
					<tr>
						<th class="name" colspan="2">@lang('Product')</th>
						<th class="price">@lang('Price')</th>
						<th class="price">@lang('Size')</th>
						<th class="price">@lang('Color')</th>
						<th class="quantity">@lang('Quantity')</th>
						<th class="subtotal">@lang('Total')</th>
						<th class="remove">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($cart as $item)
					<tr>
						<td class="thumbnail">
							<a href="{{ route('product', ['product' => $item->model]) }}">
								<img src="{{ secure_asset('storage/' . $item->model->image) }}">
							</a>
						</td>
						<td class="name">
							<a href="{{ route('product', ['product' => $item->model]) }}">
								{{ $item->model->name }}
							</a>
						</td>
						<td class="price">
							<span>{{ $item->price }}</span>
						</td>
						<td class="price">
							@if($item->options->size)
							<span>
								{{ $item->options->has('size') ? size($item->options->size) : '' }}
							</span>
							@endif
							<span></span>
						</td>
						<td class="price">
							@if($item->options->color)
							<div class="product-colors">
								<label data-bg-color="{{ color($item->options->color) }}"></label>
							</div>
							@else
								<span>N/A</span>
							@endif
						</td>
						<td class="quantity">
							<div class="product-quantity">
								<span class="qty-btn minus"><i class="ti-minus"></i></span>
								<input type="text" class="input-qty" value="{{ $item->qty }}">
								<span class="qty-btn plus"><i class="ti-plus"></i></span>
							</div>
						</td>
						<td class="subtotal"><span>{{ $item->subtotal }}</span></td>
						<td class="remove">
							<a href="{{ route('cart.remove', ['product' => $item->rowId]) }}" class="btn" onclick="event.preventDefault();document.getElementById('remove-cart-{{ $item->rowId }}').submit();">×</a>
							<form action="{{ route('cart.remove', ['product' => $item->rowId]) }}" method="post" style="display: none;" id="remove-cart-{{ $item->rowId }}">
								@csrf
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="row justify-content-between mb-n3">
				<div class="col-auto mb-3">
					<div class="cart-coupon">
						<input type="text" placeholder="@lang('Enter your coupon code')">
						<button class="btn"><i class="fal fa-gift"></i></button>
					</div>
				</div>
				<div class="col-auto">
					<a class="btn btn-light btn-hover-dark mr-3 mb-3" href="/">
						@lang('Continue Shopping')
					</a>
					<button class="btn btn-dark btn-outline-hover-dark mb-3">
						@lang('Update Cart')
					</button>
				</div>
			</div>
		</form>
		<div class="cart-totals mt-5">
			<h2 class="title">@lang('Cart totals')</h2>
			<table>
				<tbody>
					<tr class="subtotal">
						<th>@lang('Subtotal')</th>
						<td><span class="amount">{{ Cart::total() }} DZD</span></td>
					</tr>
					<tr class="total">
						<th>@lang('Total')</th>
						<td><strong><span class="amount">{{ Cart::total() }} DZD</span></strong></td>
					</tr>
				</tbody>
			</table>
			<a href="/checkout" class="btn btn-dark btn-outline-hover-dark">
				@lang('Proceed to checkout')
			</a>
		</div>
	</div>

</div>
<!-- Shopping Cart Section End -->
@stop

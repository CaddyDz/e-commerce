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
		<form class="cart-form" action="{{ route('cart.update') }}" method="POST">
			@csrf
			<table class="cart-wishlist-table table">
				<thead>
					<tr>
						<th class="name" colspan="2">@lang('Product')</th>
						<th class="price">@lang('Price')</th>
						<th class="price">@lang('Size')</th>
						<th class="price">@lang('Color')</th>
						<th class="quantity">@lang('Age')</th>
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
							<span id="price-{{ $item->model->id }}">{{ $item->price }}</span>
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
						<td class="price">
							@if($item->options->age)
							<span>
								{{ $item->options->has('age') ? age($item->options->age) : '' }}
							</span>
							@endif
							<span></span>
						</td>
						<td class="quantity">
							<div class="product-quantity">
								<span class="qty-btn minus" data-product="{{ $item->model->id }}">
									<i class="ti-minus"></i>
								</span>
								<input type="text" class="input-qty" value="{{ $item->qty }}" name="quantity[{{ $item->rowId }}]">
								<span class="qty-btn plus" data-product="{{ $item->model->id }}">
									<i class="ti-plus"></i>
								</span>
							</div>
						</td>
						<td class="subtotal">
							<span id="sum-{{ $item->model->id }}" class="product_sum">
								{{ $item->subtotal }}
							</span>
						</td>
						<td class="remove">
							<a href="{{ route('cart.remove', ['product' => $item->rowId]) }}" class="btn" onclick="event.preventDefault();document.getElementById('remove-cart-{{ $item->rowId }}').submit();">??</a>
							<form action="{{ route('cart.remove', ['product' => $item->rowId]) }}" method="post" style="display: none;" id="remove-cart-{{ $item->rowId }}">
								@csrf
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="row justify-content-between mb-n3">
				<div class="col-auto mb-3"></div>
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
					<tr class="total">
						<th>@lang('Total')</th>
						<td>
							<strong>
								<span class="amount" id="cart-total">{{ Cart::total() }} DZD</span>
							</strong>
						</td>
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

@push('scripts')
	<script src="{{ secure_asset('js/cart.js') }}"></script>
@endpush

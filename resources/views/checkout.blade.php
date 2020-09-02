@extends('layouts.app')

@section('title', __('Checkout'))

@section('content')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="/assets/images/bg/page-title-1.jpg">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="page-title">
					<h1 class="title">@lang('Checkout')</h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="/">@lang('Home')</a>
						</li>
						<li class="breadcrumb-item active">
							@lang('Checkout')
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Page Title/Header End -->

<!-- Checkout Section Start -->
<div class="section section-padding">
	<div class="container">
		<div class="checkout-coupon">
			<p class="coupon-toggle">@lang('Have a coupon?') <a href="#checkout-coupon-form" data-toggle="collapse">@lang('Click here to enter your code')</a></p>
			<div id="checkout-coupon-form" class="collapse">
				<div class="coupon-form">
					<p>@lang('If you have a coupon code, please apply it below. ')</p>
					<form action="#" class="learts-mb-n10">
						<input class="learts-mb-10" type="text" placeholder="Coupon code">
						<button class="btn btn-dark btn-outline-hover-dark learts-mb-10">apply coupon</button>
					</form>
				</div>
			</div>
		</div>
		<div class="section-title2">
			<h2 class="title">@lang('Billing details')</h2>
		</div>
		<form action="#" class="checkout-form learts-mb-50">
			<div class="row">
			    <div class="col-md-6 col-12 learts-mb-20">
					<label for="bdLastName">@lang('Last Name') <abbr class="required">*</abbr></label>
					<input type="text" id="bdLastName">
				</div>
				<div class="col-md-6 col-12 learts-mb-20">
					<label for="bdFirstName">@lang('FIrst Name') <abbr class="required">*</abbr></label>
					<input type="text" id="bdFirstName">
				</div>
				
			
				
				<div class="col-12 learts-mb-20">
					<label for="bdAddress1">@lang('Street address') <abbr class="required">*</abbr></label>
				<input type="text" id="bdAddress1" placeholder="Nom du Quartier, N° de porte">
				</div>
				<div class="col-12 learts-mb-20">
					<label for="bdAddress2" class="sr-only">Apartment, suite, unit etc. (optional)</label>
					<input type="text" id="bdAddress2" placeholder="Apartment, Batiment, unit etc. (optionel) ">
				</div>
				<div class="col-12 learts-mb-20">
					<label for="bdTownOrCity">@lang('Town / City') <abbr class="required">*</abbr></label>
					<input type="text" id="bdTownOrCity">
				</div>
				<div class="col-12 learts-mb-20">
					<label for="bdDistrict">@lang('District') <abbr class="required">*</abbr></label>
					<select id="bdDistrict" class="select2-basic">
						<option value="">@lang('Select an option…')</option>
						@foreach ($states as $state)
							<option value="{{ $state->id }}">
								@lang($state->state) {{ $state->price }}
							</option>
						@endforeach
					</select>
				</div>
				<div class="col-12 learts-mb-20">
					<label for="bdPostcode">@lang('Postcode') / ZIP (optionel)</label>
					<input type="text" id="bdPostcode">
				</div>
				<div class="col-md-6 col-12 learts-mb-20">
					<label for="bdEmail">@lang('Email address') <abbr class="required">*</abbr></label>
					<input type="text" id="bdEmail">
				</div>
				<div class="col-md-6 col-12 learts-mb-30">
					<label for="bdPhone">@lang('Phone') <abbr class="required">*</abbr></label>
					<input type="text" id="bdPhone">
				</div>
				<div class="col-12 learts-mb-40">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">@lang('Create an account?')</label>
					</div>
				</div>
				<div class="col-12 learts-mb-20">
					<label for="bdOrderNote">@lang('Order Notes (optional)')</label>
					<textarea id="bdOrderNote" placeholder="Remarques sur votre commande, par exemple : notes spéciales pour la livraison."></textarea>
				</div>
			</div>
		</form>
		<div class="section-title2 text-center">
			<h2 class="title">@lang('Your order')</h2>
		</div>
		<div class="row learts-mb-n30">
			<div class="col-lg-6 order-lg-2 learts-mb-30">
				<div class="order-review">
					<table class="table">
						<thead>
							<tr>
								<th class="name">Product</th>
								<th class="total">Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="name">Walnut Cutting Board&nbsp; <strong class="quantity">×&nbsp;1</strong></td>
								<td class="total"><span>£100.00</span></td>
							</tr>
							<tr>
								<td class="name">Pizza Plate Tray&nbsp; <strong class="quantity">×&nbsp;1</strong></td>
								<td class="total"><span>£22.00</span></td>
							</tr>
							<tr>
								<td class="name">Minimalist Ceramic Pot - Pearl river, Large&nbsp; <strong class="quantity">×&nbsp;1</strong></td>
								<td class="total"><span>£120.00</span></td>
							</tr>
						</tbody>
						<tfoot>
							<tr class="subtotal">
								<th>Subtotal</th>
								<td><span>£242.00</span></td>
							</tr>
							<tr class="total">
								<th>Total</th>
								<td><strong><span>£242.00</span></strong></td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="col-lg-6 order-lg-1 learts-mb-30">
				<div class="order-payment">
					<div class="payment-method">
						<div class="accordion" id="paymentMethod">
							
							<div class="card">
								<div class="card-header">
									<button data-toggle="collapse" data-target="#cashkPayments">@lang('Cash on delivery')</button>
								</div>
								<div id="cashkPayments" class="collapse" data-parent="#paymentMethod">
									<div class="card-body">
										<p>@lang('Pay with cash upon delivery.')</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button data-toggle="collapse" data-target="#payPalPayments">El-Dahabia <img src="" alt=""></button>
								</div>
								<div id="payPalPayments" class="collapse" data-parent="#paymentMethod">
									<div class="card-body">
										<p>Payer via carte El-Dahabia; Pas encore disponible.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						
						<button class="btn btn-dark btn-outline-hover-dark">@lang('place order')</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Checkout Section End -->
@stop

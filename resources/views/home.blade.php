@extends('layouts.app')

@section('title', __('My Account'))

@section('content')
<!-- Page Title/Header Start -->
	<div class="page-title-section section" data-bg-image="">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="page-title">
						<h1 class="title">@lang('My Account')</h1>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item active">@lang('My Account')</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Page Title/Header End -->

	<!-- My Account Section Start -->
	<div class="section section-padding">
		<div class="container">
			<div class="row learts-mb-n30">

				<!-- My Account Tab List Start -->
				<div class="col-lg-4 col-12 learts-mb-30">
					<div class="myaccount-tab-list nav">
						<a href="#dashboad" class="active" data-toggle="tab">@lang('Dashboard') <i class="far fa-home"></i></a>
						<a href="#orders" data-toggle="tab">@lang('Orders') <i class="far fa-file-alt"></i></a>
						<a href="#download" data-toggle="tab">Download <i class="far fa-arrow-to-bottom"></i></a>
						<a href="#address" data-toggle="tab">@lang('address') <i class="far fa-map-marker-alt"></i></a>
						<a href="#account-info" data-toggle="tab">@lang('Account Details') <i class="far fa-user"></i></a>
						<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
							@lang('Logout')
							<i class="far fa-sign-out-alt"></i>
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</div>
				<!-- My Account Tab List End -->

				<!-- My Account Tab Content Start -->
				<div class="col-lg-8 col-12 learts-mb-30">
					<div class="tab-content">

						<!-- Single Tab Content Start -->
						<div class="tab-pane fade show active" id="dashboad">
							<div class="myaccount-content dashboad">
									<p>@lang('Hello') <strong>{{ $user->name }}</strong> (@lang('not') <strong>{{ $user->name }}</strong>?
										<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
											@lang('Logout')
										</a>
									)
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</p>
								<p>@lang('From your account dashboard you can view your') <span>@lang('recent orders')</span>, @lang('manage your') <span>@lang('shipping addresse')</span>, @lang('and') <span>@lang('edit your password and account details')</span>.</p>
							</div>
						</div>
						<!-- Single Tab Content End -->

						<!-- Single Tab Content Start -->
						<div class="tab-pane fade" id="orders">
							<div class="myaccount-content order">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>@lang('Order')</th>
												<th>@lang('Date')</th>
												<th>@lang('Status')</th>
												<th>@lang('Total')</th>
												<th>@lang('Action')</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($user->orders as $order)
												<tr>
													<td>{{ $order->id }}</td>
													<td>{{ $order->created_at }}</td>
													<td>@lang($order->status)</td>
													<td>$3000</td>
													<td>
														<a href="shopping-cart.html">
															@lang('View')
														</a>
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- Single Tab Content End -->

						<!-- Single Tab Content Start -->
						<div class="tab-pane fade" id="download">
							<div class="myaccount-content download">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>Product</th>
												<th>Date</th>
												<th>Expire</th>
												<th>Download</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Haven - Free Real Estate PSD Template</td>
												<td>Aug 22, 2018</td>
												<td>Yes</td>
												<td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
											</tr>
											<tr>
												<td>HasTech - Profolio Business Template</td>
												<td>Sep 12, 2018</td>
												<td>Never</td>
												<td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- Single Tab Content End -->

						<!-- Single Tab Content Start -->
						<div class="tab-pane fade" id="address">
							<div class="myaccount-content address">
								<p>@lang('The following addresses will be used on the checkout page by default.')</p>
								<div class="row learts-mb-n30">
									<div class="col-md-6 col-12 learts-mb-30">
										<h4 class="title">@lang('Shipping Address') <a href="#" class="edit-link">edit</a></h4>
										<address>
											<p><strong>{{ $user->name }}</strong></p>
											<p>{{ $user->address }} <br></p>
											<p>Mobile: {{ $user->phone }}</p>
										</address>
									</div>

								</div>
							</div>
						</div>
						<!-- Single Tab Content End -->

						<!-- Single Tab Content Start -->
						<div class="tab-pane fade" id="account-info">
							<div class="myaccount-content account-details">
								<div class="account-details-form">
									<form action="#">
										<div class="row learts-mb-n30">
											<div class="col-md-6 col-12 learts-mb-30">
												<div class="single-input-item">
													<label for="first-name">First Name <abbr class="required">*</abbr></label>
													<input type="text" id="first-name">
												</div>
											</div>
											<div class="col-md-6 col-12 learts-mb-30">
												<div class="single-input-item">
													<label for="last-name">Last Name <abbr class="required">*</abbr></label>
													<input type="text" id="last-name">
												</div>
											</div>
											<div class="col-12 learts-mb-30">
												<label for="display-name">Display Name <abbr class="required">*</abbr></label>
												<input type="text" id="display-name" value="didiv91396">
												<p>This will be how your name will be displayed in the account section and in reviews</p>
											</div>
											<div class="col-12 learts-mb-30">
												<label for="email">Email Addres <abbr class="required">*</abbr></label>
												<input type="email" id="email" value="didiv91396@ismailgul.net">
											</div>
											<div class="col-12 learts-mb-30 learts-mt-30">
												<fieldset>
													<legend>Password change</legend>
													<div class="row learts-mb-n30">
														<div class="col-12 learts-mb-30">
															<label for="current-pwd">Current password (leave blank to leave unchanged)</label>
															<input type="password" id="current-pwd">
														</div>
														<div class="col-12 learts-mb-30">
															<label for="new-pwd">New password (leave blank to leave unchanged)</label>
															<input type="password" id="new-pwd">
														</div>
														<div class="col-12 learts-mb-30">
															<label for="confirm-pwd">Confirm new password</label>
															<input type="password" id="confirm-pwd">
														</div>
													</div>
												</fieldset>
											</div>
											<div class="col-12 learts-mb-30">
												<button class="btn btn-dark btn-outline-hover-dark">Save Changes</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div> <!-- Single Tab Content End -->

					</div>
				</div> <!-- My Account Tab Content End -->
			</div>
		</div>
	</div>
	<!-- My Account Section End -->
@stop

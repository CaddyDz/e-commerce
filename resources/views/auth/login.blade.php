@extends('layouts.app')

@section('content')

<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="/assets/images/bg/page-title-1.jpg">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="page-title">
					<h1 class="title">
						@lang('Login')
					</h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">@lang('Home')</a></li>
						<li class="breadcrumb-item active">@lang('Login')</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Page Title/Header End -->

<!-- Login & Register Section Start -->
<div class="section section-padding">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-lg-6">
				<div class="user-login-register bg-light">
					<div class="login-register-title">
						<h2 class="title">@lang('Login')</h2>
						<p class="desc">@lang('Great to have you back!')</p>
					</div>
					<div class="login-register-form">
						<form action="{{ route('login') }}" method="POST">
							@csrf
							<div class="row learts-mb-n50">
								<div class="col-12 learts-mb-50">
									<input type="email" name="email" placeholder="@lang('Email address')">
								</div>
								<div class="col-12 learts-mb-50">
									<input type="password" name="password" placeholder="@lang('Password')">
								</div>
								<div class="col-12 text-center learts-mb-50">
									<button class="btn btn-dark btn-outline-hover-dark" type="submit">
										@lang('Login')
									</button>
								</div>
								<div class="col-12 learts-mb-50">
									<div class="row learts-mb-n20">
										<div class="col-12 learts-mb-20">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="rememberMe">
												<label class="form-check-label" for="rememberMe">@lang('Remember me')</label>
											</div>
										</div>
										<div class="col-12 learts-mb-20">
											<a href="lost-password.html" class="fw-400">@lang('Lost your password?')</a>
										</div>
										<div class="col-12 learts-mb-20">
											<a href="/register" class="fw-400">Vous n'avez pas de compte? Inscriver Vous!</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

	
</div>
<!-- Login & Register Section End -->
@stop

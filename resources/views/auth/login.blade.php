@extends('layouts.app')

@section('title', __('Login'))

@section('content')
<!-- Login & Register Section Start -->
<div class="section section-padding">
	<div class="container">
		<div class="row no-gutters justify-content-center">
			<div class="col-md-6">
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
	</div>
</div>
<!-- Login & Register Section End -->
@stop

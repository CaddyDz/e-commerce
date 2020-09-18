@extends('layouts.app')

@section('title', __('Forbidden'))

@section('content')
<!-- 403 Section Start -->
<div class="section-404 section" data-bg-image="/assets/images/bg/bg-404.jpg">
	<div class="container">
		<div class="content-404">
			<h1 class="title">Oops!</h1>
			<h2 class="sub-title">@lang('This action is unauthorized')!</h2>
			<p>@lang('You could either go back or go to homepage')</p>
			<div class="buttons">
				<a class="btn btn-primary btn-outline-hover-dark" href="{{ url()->previous() }}">
					@lang('Go back')
				</a>
				<a class="btn btn-dark btn-outline-hover-dark" href="/">
					@lang('Homepage')
				</a>
			</div>
		</div>
	</div>
</div>
<!-- 403 Section End -->
@stop

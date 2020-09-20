@extends('layouts.app')

@section('title', __($category->name))

@section('content')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="page-title">
					<h1 class="title">{{ $category->name }}</h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="/">@lang('Home')</a>
						</li>
						<li class="breadcrumb-item active">{{ $category->name }}</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Page Title/Header End -->
<!-- Shop Products Section Start -->
<div class="section section-padding pt-0">
	<div class="section learts-mt-70">
		<div class="container">
			<!-- Products Start -->
			<div id="shop-products" class="products isotope-grid row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
				<div class="grid-sizer col-1"></div>
				@foreach ($category->brands as $brand)
					<div class="grid-item col featured">
						@include('partials.brand')
					</div>
				@endforeach
			</div>
			<!-- Products End -->
		</div>
	</div>
</div>
<!-- Shop Products Section End -->
@stop

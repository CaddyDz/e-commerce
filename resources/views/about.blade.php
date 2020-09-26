@extends('layouts.app')

@section('title', __('About'))

@section('content')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="page-title">
					<h1 class="title">@lang('About us')</h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item active">@lang('About us')</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Page Title/Header End -->

<!-- About Section Start -->
<div class="section section-padding pb-0">
	<div class="container">
		<div class="row learts-mb-n30">

			<div class="col-md-6 col-12 align-self-center learts-mb-30">
				<div class="about-us3">
					<!-- <span class="sub-title">Live out your life.</span> -->
					<h2 class="title">Le meilleur  <br> du marché algerien </h2>
					<div class="desc">
						<p>Site de vente en ligne qui reunit les meilleurs produits sur le marché algérien ; on vous propose une panoplie riche de divers produits triés sur le volet pour satisfaire vos besoins tout en vous offrant une expérience de shopping agréable depuis votre canapé...together we'll make it easy</p>
					</div>
					<!-- <a href="#" class="link">Learn more</a> -->
				</div>
			</div>
			<div class="col-md-6 col-12 text-center learts-mb-30">
				<img src="" alt="">
			</div>

		</div>
	</div>

</div>
<!-- About Section End -->

<!--
<div class="section section-padding">
	<div class="container">
		<div class="row row-cols-md-3 row-cols-1 learts-mb-n30">

			<div class="col learts-mb-30">
				<div class="icon-box4">
					<div class="inner">
						<div class="content">
							<h6 class="title">FREE SHIPPING</h6>
							<p>Once receiving your order, we will turn your products around in 3- 5 business days.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col border-left border-right learts-mb-30">
				<div class="icon-box4">
					<div class="inner">
						<div class="content">
							<h6 class="title">FREE RETURNS</h6>
							<p>We accept returns for freshly purchased products within 7 days from the payment.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col learts-mb-30">
				<div class="icon-box4">
					<div class="inner">
						<div class="content">
							<h6 class="title">SECURE PAYMENT</h6>
							<img class="img-hover-color " src="assets/images/others/pay.png" alt="">
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
-->
<!-- Instagram Section Start -->
<div class="section section-padding border-top">
	<div class="container">
		<!-- Section Title Start -->
		<div class="section-title2 text-center">
		<h3 class="sub-title">@lang('Follow us on Instagram')</h3>
			<h2 class="title"> <a href="https://www.instagram.com/dlala__dz"> @dlala__dz </a> </h2>
			
		</div>
		<!-- Section Title End -->
	<!--	<div id="instagram-feed221" class="instagram-carousel instagram-carousel1 instagram-feed"> -->
		</div>
	</div>
</div>
<!-- Instagram Section End -->
@stop

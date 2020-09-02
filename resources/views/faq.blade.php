@extends('layouts.app')

@section('title', __('FAQ'))

@section('content')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.jpg">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="page-title">
					<h1 class="title">FAQs</h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Elements</a></li>
						<li class="breadcrumb-item active">FAQs</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Page Title/Header End -->

<!-- FAQs Section Start -->
<div class="section section-padding">
	<div class="container">
		<div class="row row-cols-lg-2 row-cols-1 learts-mb-n40">

			<div class="col learts-mb-40">
				<!-- Section Title Start -->
				<div class="section-title2">
					<h2 class="title">Accordion</h2>
				</div>
				<!-- Section Title End -->
				<div class="row">
					<div class="col">
						<div class="accordion" id="faq-accordion">
							<div class="card active">
								<div class="card-header">
									<button class="btn btn-link" data-toggle="collapse" data-target="#faq-accordion-1">Is the theme responsive and customizable?</button>
								</div>

								<div id="faq-accordion-1" class="collapse show" data-parent="#faq-accordion">
									<div class="card-body">
										<p>Learts appears professional in design and responsive in performance. It proves to be highly customizable and efficient for building eCommerce shops. Engage yourself in the most effortless and well-appointed process with Learts.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-accordion-2">How long can I get theme updates for free?</button>
								</div>

								<div id="faq-accordion-2" class="collapse" data-parent="#faq-accordion">
									<div class="card-body">
										<p>ThemeMove commits to deliver regular updates of all theme items with careful error detecting, bug fixing, and design updating. The purpose of constant updating is to ensure the theme you have is in sync with the latest technology and trend.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-accordion-3">Is the support period extendable?</button>
								</div>

								<div id="faq-accordion-3" class="collapse" data-parent="#faq-accordion">
									<div class="card-body">
										<p>Our customer support team is available at office hours, six days a week to answer any kind of questions you have about our products, help you on problems with your themes, and give consultation for all of your presale questions.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-accordion-4">Do you accept extra theme services?</button>
								</div>

								<div id="faq-accordion-4" class="collapse" data-parent="#faq-accordion">
									<div class="card-body">
										<p>We are available to freelance hiring with on-demand extra services, including WordPress site design/ redesign, WordPress installation, all-in-one customization, video production, video editing and stop motion video producing.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FAQs Section End -->
@stop

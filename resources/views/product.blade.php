@extends('layouts.app')

@section('content')
	<!-- Page Title/Header Start -->
	<div class="page-title-section section" data-bg-image="/assets/images/bg/page-title-1.jpg">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="page-title">
						<h1 class="title">Shop</h1>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item"><a href="shop.html">@lang('Products')</a></li>
							<li class="breadcrumb-item active">Cleaning Dustpan & Brush</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Page Title/Header End -->

	<!-- Single Products Section Start -->
	<div class="section section-padding border-bottom">
		<div class="container">
			<div class="row learts-mb-n40">

				<!-- Product Images Start -->
				<div class="col-lg-6 col-12 learts-mb-40">
					<div class="product-images">
						<button class="product-gallery-popup hintT-left" data-hint="Click to enlarge" data-images='[
							{"src": "assets/images/product/single/1/product-zoom-1.jpg", "w": 700, "h": 1100},
							{"src": "assets/images/product/single/1/product-zoom-2.jpg", "w": 700, "h": 1100},
							{"src": "assets/images/product/single/1/product-zoom-3.jpg", "w": 700, "h": 1100},
							{"src": "assets/images/product/single/1/product-zoom-4.jpg", "w": 700, "h": 1100}
						]'><i class="far fa-expand"></i></button>
						<a href="https://www.youtube.com/watch?v=1jSsy7DtYgc" class="product-video-popup video-popup hintT-left" data-hint="Click to see video"><i class="fal fa-play"></i></a>
						<div class="product-gallery-slider">
							<div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-1.jpg">
								<img src="assets/images/product/single/1/product-1.jpg" alt="">
							</div>
							<div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-2.jpg">
								<img src="assets/images/product/single/1/product-2.jpg" alt="">
							</div>
							<div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-3.jpg">
								<img src="assets/images/product/single/1/product-3.jpg" alt="">
							</div>
							<div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-4.jpg">
								<img src="assets/images/product/single/1/product-4.jpg" alt="">
							</div>
						</div>
						<div class="product-thumb-slider">
							<div class="item">
								<img src="assets/images/product/single/1/product-thumb-1.jpg" alt="">
							</div>
							<div class="item">
								<img src="assets/images/product/single/1/product-thumb-2.jpg" alt="">
							</div>
							<div class="item">
								<img src="assets/images/product/single/1/product-thumb-3.jpg" alt="">
							</div>
							<div class="item">
								<img src="assets/images/product/single/1/product-thumb-4.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<!-- Product Images End -->

				<!-- Product Summery Start -->
				<div class="col-lg-6 col-12 learts-mb-40">
					<div class="product-summery">
						<div class="product-nav">
							<a href="#"><i class="fal fa-long-arrow-left"></i></a>
							<a href="#"><i class="fal fa-long-arrow-right"></i></a>
						</div>
						<!--<div class="product-ratings">
							<span class="star-rating">
								<span class="rating-active" style="width: 100%;">@lang('ratings')</span>
							</span>
							<a href="#reviews" class="review-link">(<span class="count">3</span> @lang('customer reviews'))</a>
						</div> -->
						<h3 class="product-title">{{ $product->name }}</h3>
						<div class="product-price">{{ $product->price}} Dzd </div>
						<div class="product-description">
							<p>{{ $product->descrption }}</p>
						</div>
						<div class="product-variations">
							<table>
								<tbody>
									@if($product->display_sizes && $product->sizes->isNotEmpty())
									<tr>
										<td class="label"><span>@lang('Available Sizes')</span></td>
										<td class="value">
											<div class="product-sizes">
												@foreach ($product->sizes as $size)
													<a href="#">{{ $size->label }}</a>
												@endforeach
											</div>
										</td>
									</tr>
									@endif
									@if($product->display_colors && $product->colors->isNotEmpty())
									<tr>
										<td class="label"><span>@lang('Available Colors')</span></td>
										<td class="value">
											<div class="product-colors">
												@foreach ($product->colors as $color)
													<a href="#" data-bg-color="#000000"></a>
												@endforeach
											</div>
										</td>
									</tr>
									@endif
									<tr>
										<td class="label"><span>@lang('Quantity')</span></td>
										<td class="value">
											<div class="product-quantity">
												<span class="qty-btn minus"><i class="ti-minus"></i></span>
												<input type="text" class="input-qty" value="1">
												<span class="qty-btn plus"><i class="ti-plus"></i></span>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="product-buttons">
							<!-- <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark hintT-top" data-hint="Add to Wishlist"><i class="fal fa-heart"></i></a> -->
							<a href="{{ route('cart.add', ['product'=>$product])}}" class="btn btn-dark btn-outline-hover-dark"><i class="fal fa-shopping-cart"></i> @lang('Add to Cart')</a>
							
						</div>
						<div class="product-brands">
							<span class="title">@lang('Brands')</span>
							<div class="brands">
								<a href="{{ route('brand', ['brand' => $product->brand]) }}">
									<img src="{{ secure_asset('storage/' . $product->brand->logo) }}" alt="@lang('Brand Logo')">
								</a>
							</div>
						</div>
						<div class="product-meta">
							<table>
								<tbody>
									
									<tr>
										<td class="label"><span>@lang('Category')</span></td>
										<td class="value">
											<ul class="product-category">
												<li><a href="#">Kitchen</a></li>
											</ul>
										</td>
									</tr>
									<tr>
									<!--	<td class="label"><span>Tags</span></td>
										<td class="value">
											<ul class="product-tags">
												<li><a href="#">handmade</a></li>
												<li><a href="#">learts</a></li>
												<li><a href="#">mug</a></li>
												<li><a href="#">product</a></li>
												<li><a href="#">learts</a></li>
											</ul>
										</td> -->
									</tr>
									<!--
									<tr>
										<td class="label"><span>@lang('Share on')</span></td>
										<td class="va">
											<div class="product-share">
												<a href="#"><i class="fab fa-facebook-f"></i></a>
												<a href="#"><i class="fab fa-twitter"></i></a>
												<a href="#"><i class="fab fa-google-plus-g"></i></a>
												<a href="#"><i class="fab fa-pinterest"></i></a>
												<a href="#"><i class="fal fa-envelope"></i></a>
											</div>
										</td>
									</tr> -->
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Product Summery End -->

			</div>
		</div>

	</div>
	<!-- Single Products Section End -->

	<!-- Single Products Infomation Section Start -->
	<!--
	<div class="section section-padding border-bottom">
		<div class="container">

			<ul class="nav product-info-tab-list">
				
				<li><a data-toggle="tab" href="#tab-additional_information">@lang('Additional information')</a></li>
				<li><a data-toggle="tab" href="#tab-reviews">@lang('Reviews')</a></li>
			</ul> 
			<div class="tab-content product-infor-tab-content">
				<div class="tab-pane fade show active" id="tab-description">
					<div class="row">
						<div class="col-lg-10 col-12 mx-auto">
							<p>Easy clip-on handle – Hold the brush and dustpan together for storage; the dustpan edge is serrated to allow easy scraping off the hair without entanglement. High-quality bristles – no burr damage, no scratches, thick and durable, comfortable to remove dust and smaller particles. Rubber lip – The rubber lip on the front of the dustpan helps to remove all dust at once.</p>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="tab-pwb_tab">
					<div class="row learts-mb-n30">
						<div class="col-12 learts-mb-30">
							<div class="row learts-mb-n10">
								<div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="assets/images/brands/brand-3.png" alt=""></div>
								<div class="col learts-mb-10">
									<p>We’ve worked with numerous industries and famous fashion brands around the world. We have also created tremendous impacts on fashion manufacturing and online sales. When we partner with an eCommerce agency, we connect every activity to set the trend and win customers’ trust. We make sure our customers are always happy with our products.</p>
								</div>
							</div>
						</div>
						<div class="col-12 learts-mb-30">
							<div class="row learts-mb-n10">
								<div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="assets/images/brands/brand-8.png" alt=""></div>
								<div class="col learts-mb-10">
									<p>Prior to Houdini, there have been many clothing brands that achieved such a roaring success. However, there’s no other brand that can obtain such a precious position like us. We have successfully built our site to make more people know about our products as well as our motto. We’ve been the inspiration for many other small and medium-sized businesses.</p>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<div class="tab-pane fade" id="tab-additional_information">
					<div class="row">
						<div class="col-lg-8 col-md-10 col-12 mx-auto">
							<div class="table-responsive">
								<table class="table table-bordered">
									<tbody>
										@if($product->display_sizes)
										<tr>
											<td>@lang('Available Sizes')</td>
											<td>
												@foreach ($product->sizes as $size)
													{{ $size->label }}
												@endforeach
											</td>
										</tr>
										@endif
										@if($product->display_colors)
										<tr>
											<td>@lang('Available Colors')</td>
											<td>
												@foreach ($product->colors as $color)
													{{ $color->color }}
												@endforeach
											</td>
										</tr>
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="tab-reviews">
					<div class="product-review-wrapper">
						<span class="title">3 reviews for Cleaning Dustpan & Brush</span>
						<ul class="product-review-list">
							<li>
								<div class="product-review">
									<div class="thumb"><img src="assets/images/review/review-1.jpg" alt=""></div>
									<div class="content">
										<div class="ratings">
											<span class="star-rating">
												<span class="rating-active" style="width: 100%;">ratings</span>
											</span>
										</div>
										<div class="meta">
											<h5 class="title">Edna Watson</h5>
											<span class="date">November 27, 2020</span>
										</div>
										<p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="product-review">
									<div class="thumb"><img src="assets/images/review/review-2.jpg" alt=""></div>
									<div class="content">
										<div class="ratings">
											<span class="star-rating">
												<span class="rating-active" style="width: 80%;">ratings</span>
											</span>
										</div>
										<div class="meta">
											<h5 class="title">Scott James</h5>
											<span class="date">November 27, 2020</span>
										</div>
										<p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="product-review">
									<div class="thumb"><img src="assets/images/review/review-3.jpg" alt=""></div>
									<div class="content">
										<div class="ratings">
											<span class="star-rating">
												<span class="rating-active" style="width: 60%;">ratings</span>
											</span>
										</div>
										<div class="meta">
											<h5 class="title">Owen Christ</h5>
											<span class="date">November 27, 2020</span>
										</div>
										<p>Good Product!</p>
									</div>
								</div>
							</li>
						</ul>
						<span class="title">Add a review</span>
						<div class="review-form">
							<p class="note">Your email address will not be published. Required fields are marked *</p>
							<form action="#">
								<div class="row learts-mb-n30">
									<div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Name *"></div>
									<div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *"></div>
									<div class="col-12 learts-mb-10">
										<div class="form-rating">
											<span class="title">Your rating</span>
											<span class="rating"><span class="star"></span></span>
										</div>
									</div>
									<div class="col-12 learts-mb-30"><textarea placeholder="Your Review *"></textarea></div>
									<div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div> -->
	<!-- Single Products Infomation Section End -->

	<!-- Recommended Products Section Start -->
	<div class="section section-padding">
		<div class="container">

			<!-- Section Title Start -->
			<div class="section-title2 text-center">
				<h2 class="title">@lang('You Might Also Like')</h2>
			</div>
			<!-- Section Title End -->

			<!-- Products Start -->
			<div class="product-carousel">

				<div class="col">
					<div class="product">
						<div class="product-thumb">
							<a href="product-details.html" class="image">
								<span class="product-badges">
									<span class="onsale">-13%</span>
								</span>
								<img src="assets/images/product/s270/product-1.jpg" alt="Product Image">
								<img class="image-hover " src="assets/images/product/s270/product-1-hover.jpg" alt="Product Image">
							</a>
							<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
						</div>
						<div class="product-info">
							<h6 class="title"><a href="product-details.html">Boho Beard Mug</a></h6>
							<span class="price">
								<span class="old">$45.00</span>
							<span class="new">$39.00</span>
							</span>
							<div class="product-buttons">
								<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
								<a href="#" class="product-button hintT-top" data-hint="@lang('Add to Cart')"><i class="fal fa-shopping-cart"></i></a>
								
							</div>
						</div>
					</div>
				</div>
			<!-- Products End -->

		</div>
	</div>
	<!-- Recommended Products Section End -->
@stop

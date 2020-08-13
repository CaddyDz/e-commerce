@extends('layouts.app')


@section('content')
	<!-- Slider main container Start -->
	<div class="home6-slider section">
		<div class="home6-slide-item" data-bg-image="assets/images/slider/home6/slide1-1.jpg">
			<div class="container">
				<div class="home6-slide1-content">
					<h3 class="sub-title">Little Simple Things</h3>
					<h2 class="title">Where Motivations Take Root</h2>
					<div class="link"><a href="shop.html" class="btn btn-light btn-hover-black">shop now</a></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider main container End -->

	<!-- Category Banner Section Start -->
	<div class="section section-fluid learts-pt-30">
		<div class="container">
			<div class="category-banner1-carousel">

				<div class="col">
					<div class="category-banner1">
						<div class="inner">
							<a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-1.jpg" alt=""></a>
							<div class="content">
								<h3 class="title">
									<a href="shop.html">Gift ideas</a>
									<span class="number">16</span>
								</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="category-banner1">
						<div class="inner">
							<a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-2.jpg" alt=""></a>
							<div class="content">
								<h3 class="title">
									<a href="shop.html">Home Decor</a>
									<span class="number">16</span>
								</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="category-banner1">
						<div class="inner">
							<a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-3.jpg" alt=""></a>
							<div class="content">
								<h3 class="title">
									<a href="shop.html">Kids & Babies</a>
									<span class="number">6</span>
								</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="category-banner1">
						<div class="inner">
							<a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-4.jpg" alt=""></a>
							<div class="content">
								<h3 class="title">
									<a href="shop.html">Kitchen</a>
									<span class="number">15</span>
								</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="category-banner1">
						<div class="inner">
							<a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-5.jpg" alt=""></a>
							<div class="content">
								<h3 class="title">
									<a href="shop.html">Kniting & Sewing</a>
									<span class="number">4</span>
								</h3>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Category Banner Section End -->

	<!-- Product Section Start -->
	<div class="section section-padding">
		<div class="container">

			<div class="row learts-mb-50">
				<div class="col">
					<!-- Section Title Start -->
					<div class="section-title text-center mb-0">
						<h3 class="sub-title">Just for you</h3>
						<h2 class="title title-icon-both">Making & crafting</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<!-- Product Tab List Start -->
			<div class="row learts-mb-40">
				<div class="col">
					<ul class="nav text-uppercase justify-content-center mx-n1 mb-n2">
						<li class="nav-item mx-1 mb-2"><a href="#product-all" data-toggle="tab" class="btn btn-md btn-light btn-hover-primary active">All</a></li>
						<li class="nav-item mx-1 mb-2"><a href="#product-gift-ideas" data-toggle="tab" class="btn btn-md btn-light btn-hover-primary">Gift ideas</a></li>
						<li class="nav-item mx-1 mb-2"><a href="#product-home-decor" data-toggle="tab" class="btn btn-md btn-light btn-hover-primary">Home Decor</a></li>
						<li class="nav-item mx-1 mb-2"><a href="#product-kitchen" data-toggle="tab" class="btn btn-md btn-light btn-hover-primary">Kitchen</a></li>
						<li class="nav-item mx-1 mb-2"><a href="#product-toys" data-toggle="tab" class="btn btn-md btn-light btn-hover-primary">Toys</a></li>
					</ul>
				</div>
			</div>
			<!-- Product Tab List End -->

			<div class="tab-content">
				<div class="tab-pane fade show active" id="product-all">
					<!-- Products Start -->
					<div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
						@foreach ($products as $product)
							<div class="col">
								<div class="product">
									<div class="product-thumb">
										<a href="{{ route('product', ['product' => $product]) }}" class="image">
											@if($product->discount)
											<span class="product-badges">
												<span class="onsale">-{{ $product->discount->value }}%</span>
											</span>
											@endif
											<img src="{{ secure_asset('storage/' . $product->image) }}" alt="@lang('Product Image')">
										</a>
										{{-- <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a> --}}
									</div>
									<div class="product-info">
										<h6 class="title">
											<a href="{{ route('product', ['product' => $product]) }}">
												{{ $product->name }}
											</a>
										</h6>
										<span class="price">
											@if($product->discount)
												<span class="old">{{ $product->price }}</span>
												<span class="new">{{ $product->new_price }}</span>
											@else
												<span class="new">{{ $product->price }}</span>
											@endif
										</span>
										<div class="product-buttons">
											<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="@lang('Quick View')">
												<i class="fal fa-search"></i>
											</a>
											<a href="{{ route('cart.add', ['product' => $product]) }}" class="product-button hintT-top" data-hint="@lang('Add to Cart')">
												<i class="fal fa-shopping-cart"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					<!-- Products End -->
				</div>
				<div class="tab-pane fade" id="product-gift-ideas">
					<!-- Products Start -->
					<div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-21.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Pottery Bowl Set</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-22.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-1-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Hallmark Grandma Mug</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

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
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="hot">hot</span>
										</span>
										<img src="assets/images/product/s270/product-23.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-23-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Round Tray Plate</a></h6>
									<span class="price">
										$100.00
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-10%</span>
										</span>
										<img src="assets/images/product/s270/product-24.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-24-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Steel Watering Can</a></h6>
									<span class="price">
										<span class="old">$20.00</span>
									<span class="new">$18.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-10%</span>
										</span>
										<img src="assets/images/product/s270/product-16.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-16-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Metal Wall Clock</a></h6>
									<span class="price">
										$200.00 - $250.00
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-19.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Country Feast Set</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-20.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Wooden Condiment Cups</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Products End -->
				</div>
				<div class="tab-pane fade" id="product-home-decor">
					<!-- Products Start -->
					<div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

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
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="hot">hot</span>
										</span>
										<img src="assets/images/product/s270/product-23.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-23-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Round Tray Plate</a></h6>
									<span class="price">
										$100.00
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-10%</span>
										</span>
										<img src="assets/images/product/s270/product-24.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-24-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Steel Watering Can</a></h6>
									<span class="price">
										<span class="old">$20.00</span>
									<span class="new">$18.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-10%</span>
										</span>
										<img src="assets/images/product/s270/product-16.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-16-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Metal Wall Clock</a></h6>
									<span class="price">
										$200.00 - $250.00
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-19.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Country Feast Set</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-20.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Wooden Condiment Cups</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-21.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Pottery Bowl Set</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-22.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-1-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Hallmark Grandma Mug</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Products End -->
				</div>
				<div class="tab-pane fade" id="product-kitchen">
					<!-- Products Start -->
					<div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-10%</span>
										</span>
										<img src="assets/images/product/s270/product-24.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-24-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Steel Watering Can</a></h6>
									<span class="price">
										<span class="old">$20.00</span>
									<span class="new">$18.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-10%</span>
										</span>
										<img src="assets/images/product/s270/product-16.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-16-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Metal Wall Clock</a></h6>
									<span class="price">
										$200.00 - $250.00
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-19.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Country Feast Set</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-20.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Wooden Condiment Cups</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-21.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Pottery Bowl Set</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-22.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-1-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Hallmark Grandma Mug</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

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
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="hot">hot</span>
										</span>
										<img src="assets/images/product/s270/product-23.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-23-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Round Tray Plate</a></h6>
									<span class="price">
										$100.00
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Products End -->
				</div>
				<div class="tab-pane fade" id="product-toys">
					<!-- Products Start -->
					<div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="hot">hot</span>
										</span>
										<img src="assets/images/product/s270/product-23.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-23-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Round Tray Plate</a></h6>
									<span class="price">
										$100.00
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-10%</span>
										</span>
										<img src="assets/images/product/s270/product-24.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-24-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Steel Watering Can</a></h6>
									<span class="price">
										<span class="old">$20.00</span>
									<span class="new">$18.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-10%</span>
										</span>
										<img src="assets/images/product/s270/product-16.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-16-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Metal Wall Clock</a></h6>
									<span class="price">
										$200.00 - $250.00
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-19.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Country Feast Set</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-20.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Wooden Condiment Cups</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-21.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Pottery Bowl Set</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="product">
								<div class="product-thumb">
									<a href="product-details.html" class="image">
										<span class="product-badges">
											<span class="onsale">-13%</span>
										</span>
										<img src="assets/images/product/s270/product-22.jpg" alt="Product Image">
										<img class="image-hover " src="assets/images/product/s270/product-1-hover.jpg" alt="Product Image">
									</a>
									<a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
								</div>
								<div class="product-info">
									<h6 class="title"><a href="product-details.html">Hallmark Grandma Mug</a></h6>
									<span class="price">
										<span class="old">$45.00</span>
									<span class="new">$39.00</span>
									</span>
									<div class="product-buttons">
										<a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

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
										<a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
										<a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fal fa-random"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Products End -->
				</div>
			</div>

		</div>
	</div>
	<!-- Product Section End -->

	<!-- Product/Sale Banner Section Start -->
	<div class="section section-padding pt-0">
		<div class="container">
			<div class="row row-cols-lg-2 row-cols-1 learts-mb-n30">

				<div class="col learts-mb-30">
					<div class="sale-banner8">
						<img src="assets/images/banner/sale/sale-banner8-1.jpg" alt="Sale Banner Image">
						<div class="content">
							<h2 class="title">Little simple <br> things</h2>
							<a href="#" class="link">shop now</a>
						</div>
					</div>
				</div>

				<div class="col learts-mb-30">
					<div class="sale-banner8">
						<img src="assets/images/banner/sale/sale-banner8-2.jpg" alt="Sale Banner Image">
						<div class="content">
							<h2 class="title">Holiday <br> Gifts</h2>
							<a href="#" class="link">shop now</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Product/Sale Banner Section End -->

	<!-- Deal of the Day Section Start -->
	<div class="section section-fluid section-padding" data-bg-color="#f4f3ec">
		<div class="container">
			<div class="row align-items-center learts-mb-n30">

				<div class="col-lg-6 col-12 learts-mb-30">
					<div class="product-deal-image text-center">
						<img src="assets/images/product/deal-product-2.png" alt="">
					</div>
				</div>

				<div class="col-lg-6 col-12 learts-mb-30">
					<div class="product-deal-content">
						<h2 class="title">Deal of the day</h2>
						<div class="desc">
							<p>Years of experience brought about by our skilled craftsmen could ensure that every piece produced is a work of art. Our focus is always the best quality possible.</p>
						</div>
						<div class="countdown1" data-countdown="2021/01/01"></div>
						<a href="shop.html" class="btn btn-dark btn-hover-primary">Shop Now</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Deal of the Day Section End -->

	<!-- List Product Section Start -->
	<div class="section section-padding">
		<div class="container">
			<div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 learts-mb-n30">

				<!-- New arrivals Start -->
				<div class="col learts-mb-30">
					<div class="block-title">
						<h3 class="title">New arrivals</h3>
					</div>

					<div class="product-list-slider">

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-1.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Boho Beard Mug</a></h6>
								<span class="price">
									<span class="old">$45.00</span>
								<span class="new">$39.00</span>
								</span>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-2.png" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Motorized Tricycle</a></h6>
								<span class="price">
									$35.00
								</span>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-3.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Walnut Cutting Board</a></h6>
								<span class="price">
									$100.00
								</span>
								<div class="ratting">
									<span class="rate" style="width: 80%;"></span>
								</div>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-4.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Pizza Plate Tray</a></h6>
								<span class="price">
									<span class="old">$30.00</span>
								<span class="new">$22.00</span>
								</span>
								<div class="ratting">
									<span class="rate" style="width: 80%;"></span>
								</div>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-5.png" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Minimalist Ceramic Pot</a></h6>
								<span class="price">
									$120.00
								</span>
								<div class="ratting">
									<span class="rate" style="width: 100%;"></span>
								</div>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-6.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Clear Silicate Teapot</a></h6>
								<span class="price">
									$140.00
								</span>
							</div>
						</div>

					</div>

				</div>
				<!-- New arrivals End -->

				<!-- Top rate Start -->
				<div class="col learts-mb-30">

					<div class="block-title">
						<h3 class="title">Top rate</h3>
					</div>

					<div class="product-list-slider">

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-7.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Pottery Bowl Set</a></h6>
								<span class="price">
									<span class="old">$45.00</span>
								<span class="new">$39.00</span>
								</span>
								<div class="ratting">
									<span class="rate" style="width: 100%;"></span>
								</div>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-8.png" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Electric Egg Blender</a></h6>
								<span class="price">
									$200.00
								</span>
								<div class="ratting">
									<span class="rate" style="width: 100%;"></span>
								</div>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-9.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Hallmark Grandma Mug</a></h6>
								<span class="price">
									<span class="old">$45.00</span>
								<span class="new">$39.00</span>
								</span>
								<div class="ratting">
									<span class="rate" style="width: 100%;"></span>
								</div>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-10.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Modern Camera</a></h6>
								<span class="price">
									$380.00
								</span>
								<div class="ratting">
									<span class="rate" style="width: 100%;"></span>
								</div>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-11.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Steel Watering Can</a></h6>
								<span class="price">
									<span class="old">$20.00</span>
								<span class="new">$18.00</span>
								</span>
								<div class="ratting">
									<span class="rate" style="width: 100%;"></span>
								</div>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-12.png" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Minimalist Ceramic Pot</a></h6>
								<span class="price">
									$120.00
								</span>
								<div class="ratting">
									<span class="rate" style="width: 100%;"></span>
								</div>
							</div>
						</div>

					</div>

				</div>
				<!-- Top rate End -->

				<!-- Sale items Start -->
				<div class="col learts-mb-30">

					<div class="block-title">
						<h3 class="title">Sale items</h3>
					</div>

					<div class="product-list-slider">

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-1.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Boho Beard Mug</a></h6>
								<span class="price">
									<span class="old">$45.00</span>
								<span class="new">$39.00</span>
								</span>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-13.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Antique Sewing Scissors</a></h6>
								<span class="price">
									<span class="old">$15.00</span>
								<span class="new">$12.00</span>
								</span>
								<div class="ratting">
									<span class="rate" style="width: 80%;"></span>
								</div>
							</div>
						</div>

						<div class="list-product">
							<div class="thumbnail">
								<a href="product-details.html"><img src="assets/images/product/list-product-4.jpg" alt="List product"></a>
							</div>
							<div class="content">
								<h6 class="title"><a href="product-details.html">Pizza Plate Tray</a></h6>
								<span class="price">
									<span class="old">$30.00</span>
								<span class="new">$22.00</span>
								</span>
								<div class="ratting">
									<span class="rate" style="width: 80%;"></span>
								</div>
							</div>
						</div>

					</div>

				</div>
				<!-- Sale items End -->

			</div>
		</div>
	</div>
	<!-- List Product Section End -->

	<!-- Instagram Section Start -->
	<div class="section section-fluid section-padding pt-0">
		<div class="container">

			<!-- Section Title Start -->
			<div class="section-title2 text-center">
				<h3 class="sub-title">Follow us on Instagram</h3>
				<h2 class="title">@learts_shop</h2>
			</div>
			<!-- Section Title End -->

			<div id="instagram-feed221" class="instagram-carousel instagram-carousel1 instagram-feed">
			</div>

		</div>
	</div>
	<!-- Instagram Section End -->
@stop

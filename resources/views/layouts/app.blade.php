<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ config('app.name') }}</title>
	<meta name="robots" content="noindex, follow" />
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">

	<!-- CSS
	============================================ -->

	<!-- Vendor CSS (Bootstrap & Icon Font) -->
	{{-- <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/vendor/font-awesome-pro.min.css">
	<link rel="stylesheet" href="/assets/css/vendor/themify-icons.css">
	<link rel="stylesheet" href="/assets/css/vendor/customFonts.css"> --}}

	<!-- Plugins CSS (All Plugins Files) -->
	{{-- <link rel="stylesheet" href="/assets/css/plugins/select2.min.css">
	<link rel="stylesheet" href="/assets/css/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="/assets/css/plugins/swiper.min.css">
	<link rel="stylesheet" href="/assets/css/plugins/nice-select.css">
	<link rel="stylesheet" href="/assets/css/plugins/ion.rangeSlider.min.css">
	<link rel="stylesheet" href="/assets/css/plugins/photoswipe.css">
	<link rel="stylesheet" href="/assets/css/plugins/photoswipe-default-skin.css">
	<link rel="stylesheet" href="/assets/css/plugins/magnific-popup.css">
	<link rel="stylesheet" href="/assets/css/plugins/slick.css"> --}}

	<!-- Main Style CSS -->
	 {{-- <link rel="stylesheet" href="/assets/css/style.css"> --}}

	<!-- Use the minified version files listed below for better performance and remove the files listed above -->
	<link rel="stylesheet" href="/assets/css/vendor/vendor.min.css">
	<link rel="stylesheet" href="/assets/css/plugins/plugins.min.css">
	<link rel="stylesheet" href="/assets/css/style.min.css">

</head>

<body>

	<!-- Topbar Section Start -->
	<div class="topbar-section section border-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col d-none d-md-block">
					<div class="topbar-menu">
						<ul>
						   <!-- <li><a href="#"><i class="fa fa-map-marker-alt"></i>Store Location</a></li> -->
							<li><a href="#"><i class="fa fa-truck"></i>Order Status</a></li>
						</ul>
					</div>
				</div>
			   <!--  <div class="col d-md-none d-lg-block">
					<p class="text-center my-2">Free shipping for orders over $59 !</p>
				</div>-->

				<!-- Header Language & Currency Start -->
				{{-- <div class="col d-none d-md-block">
					<ul class="header-lan-curr text-white justify-content-end">
						<li><a href="#">Français</a>
							<ul class="curr-lan-sub-menu">
								<li><a href="#">Arabe</a></li>
								<!-- <li><a href="#">Deutsch</a></li>-->
							</ul>
						</li>
						<!-- <li><a href="#">USD</a>
							<ul class="curr-lan-sub-menu">
								<li><a href="#">EUR</a></li>
								<li><a href="#">GBP</a></li>
							</ul> -->
						</li>
					</ul>
				</div> --}}
				<!-- Header Language & Currency End -->
			</div>
		</div>
	</div>
	<!-- Topbar Section End -->
	<!-- Header Section Start -->
	<div class="header-section section bg-white d-none d-xl-block">
		<div class="container">
			<div class="row justify-content-between align-items-center">

				<!-- Header Logo Start -->
				<div class="col-auto">
					<div class="header-logo justify-content-center">
						<a href="/"><img src="assets/images/logo/logo.png" alt="Learts Logo"></a>
					</div>
				</div>
				<!-- Header Logo End -->

				<!-- Header Search Start -->
				{{-- <div class="col">
					<div class="header6-search">
						<form action="#">
							<div class="row no-gutters">
								<div class="col-auto">
									<select class="search-select select2-basic">
										<option value="0">All Categories</option>
										<option value="kids-babies">Kids &amp; Babies</option>
										<option value="home-decor">Home Decor</option>
										<option value="gift-ideas">Gift ideas</option>
										<option value="kitchen">Kitchen</option>
										<option value="toys">Toys</option>
										<option value="kniting-sewing">Kniting &amp; Sewing</option>
										<option value="pots">Pots</option>
									</select>
								</div>
								<div class="col">
									<input type="text" placeholder="Search Products...">
								</div>
								<button type="submit"><i class="fal fa-search"></i></button>
							</div>
						</form>
					</div>
				</div> --}}
				<!-- Header Search End -->

				<!-- Header Tools Start -->
				<div class="col-auto">
					<div class="header-tools justify-content-end">
						<div class="header-login">
							<a href="{{ route('home') }}">
								<i class="fal fa-user"></i>
							</a>
						</div>
						{{-- <div class="header-wishlist">
							<a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>
						</div>
						<div class="header-cart">
							<a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
						</div> --}}
					</div>
				</div>
				<!-- Header Tools End -->

			</div>
		</div>

		<!-- Site Menu Section Start -->
		<div class="site-menu-section section border-top">
			<div class="container">
				<div class="header-categories">
					<button class="category-toggle">
					<i class="fal fa-bars"></i> Browse Categories</button>
					<ul class="header-category-list">
						<li><a href="#"><img src="assets/images/icons/cat-icon-1.png" alt=""> Knitting</a></li>
						<li><a href="#"><img src="assets/images/icons/cat-icon-2.png" alt=""> Sewing</a></li>
						<li><a href="#"><img src="assets/images/icons/cat-icon-3.png" alt=""> Holyday gifts</a></li>
						<li><a href="#"><img src="assets/images/icons/cat-icon-4.png" alt=""> Birthday gifts</a></li>
						<li><a href="#"><img src="assets/images/icons/cat-icon-5.png" alt=""> Home decor</a></li>
						<li><a href="#"><img src="assets/images/icons/cat-icon-6.png" alt=""> For kids & babies</a></li>
						<li><a href="#"><img src="assets/images/icons/cat-icon-7.png" alt=""> Garden decor</a></li>
						<li><a href="#"><img src="assets/images/icons/cat-icon-8.png" alt=""> Accessories</a></li>
						<li><a href="#"><img src="assets/images/icons/cat-icon-9.png" alt=""> Soap</a></li>
						<li><a href="#"><img src="assets/images/icons/cat-icon-10.png" alt=""> Sale</a></li>
					</ul>
				</div>
				<nav class="site-main-menu justify-content-center menu-height-60">
					<ul>
						<li class="has-children"><a href="#"><span class="menu-text">Home</span></a>
							<ul class="sub-menu mega-menu">
								<li>
									<a href="#" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
									<ul>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-01.jpg"> <a href="/"><span class="menu-text">Arts Propelled</span></a></li>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-02.jpg"> <a href="index-2.html"><span class="menu-text">Decor Thriving</span></a></li>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-03.jpg"> <a href="index-3.html"><span class="menu-text">Savvy Delight</span></a></li>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-04.jpg"> <a href="index-4.html"><span class="menu-text">Perfect Escapes</span></a></li>
									</ul>
								</li>
								<li>
									<a href="index-2.html" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
									<ul>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-05.jpg"> <a href="index-5.html"><span class="menu-text">Kitchen Cozy</span></a></li>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-06.jpg"> <a href="index-6.html"><span class="menu-text">Dreamy Designs</span></a></li>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-07.jpg"> <a href="index-7.html"><span class="menu-text">Crispy Recipes</span></a></li>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-08.jpg"> <a href="index-8.html"><span class="menu-text">Decoholic Chic</span></a></li>
									</ul>
								</li>
								<li>
									<a href="index-2.html" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
									<ul>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-9.jpg"> <a href="index-9.html"><span class="menu-text">Reblended Dish</span></a></li>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-10.jpg"> <a href="index-10.html"><span class="menu-text">Craftin House</span></a></li>
										<li> <img class="mmh_img " src="assets/images/demo/menu/home-11.jpg"> <a href="index-11.html"><span class="menu-text">Craftswork Biz</span></a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="menu-banner"><img src="assets/images/banner/menu-banner-1.jpg" alt="Home Menu Banner"></a>
								</li>
							</ul>
						</li>
						<li class="has-children"><a href="#"><span class="menu-text">Shop</span></a>
							<ul class="sub-menu mega-menu">
								<li>
									<a href="#" class="mega-menu-title"><span class="menu-text">SHOP PAGES</span></a>
									<ul>
										<li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
										<li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
										<li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
										<li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop Fullwidth No Space</span></a></li>
										<li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No Sidebar</span></a></li>
										<li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop Fullwidth Left Sidebar</span></a></li>
										<li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop Fullwidth Right Sidebar</span></a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT PAGES</span></a>
									<ul>
										<li><a href="product-details.html"><span class="menu-text">Basic</span></a></li>
										<li><a href="product-details-fullwidth.html"><span class="menu-text">Fullwidth</span></a></li>
										<li><a href="product-details-sticky.html"><span class="menu-text">Sticky Details</span></a></li>
										<li><a href="product-details-sidebar.html"><span class="menu-text">Width Sidebar</span></a></li>
										<li><a href="product-details-extra-content.html"><span class="menu-text">Extra Content</span></a></li>
										<li><a href="product-details-image-variation.html"><span class="menu-text">Variations Images</span></a></li>
										<li><a href="product-details-group.html"><span class="menu-text">Bought Together</span></a></li>
										<li><a href="product-details-360.html"><span class="menu-text">Product 360</span></a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
									<ul>
										<li><a href="product-details-background.html"><span class="menu-text">Product with Background</span></a></li>
										<li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
										<li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
										<li><a href="order-tracking.html"><span class="menu-text">Order Tracking</span></a></li>
										<li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
										<li><a href="login-register.html"><span class="menu-text">Customer Login</span></a></li>
										<li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
										<li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a></li>
									</ul>
								</li>
								<li class="align-self-center">
									<a href="#" class="menu-banner"><img src="assets/images/banner/menu-banner-2.png" alt="Shop Menu Banner"></a>
								</li>
							</ul>
						</li>
						<li class="has-children"><a href="#"><span class="menu-text">Project</span></a>
							<ul class="sub-menu">
								<li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
								<li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
								<li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
								<li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
							</ul>
						</li>
						<li class="has-children"><a href="#"><span class="menu-text">Elements</span></a>
							<ul class="sub-menu mega-menu">
								<li>
									<a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
									<ul>
										<li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
										<li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
										<li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
									<ul>
										<li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
										<li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
										<li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
									<ul>
										<li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
										<li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
										<li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
									<ul>
										<li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
										<li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
										<li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="has-children"><a href="#"><span class="menu-text">Blog</span></a>
							<ul class="sub-menu">
								<li class="has-children"><a href="blog-right-sidebar.html"><span class="menu-text">Standard Layout</span></a>
									<ul class="sub-menu">
										<li><a href="blog-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
										<li><a href="blog-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
										<li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
									</ul>
								</li>
								<li class="has-children"><a href="blog-grid-right-sidebar.html"><span class="menu-text">Grid Layout</span></a>
									<ul class="sub-menu">
										<li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
										<li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
										<li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
									</ul>
								</li>
								<li class="has-children"><a href="blog-list-right-sidebar.html"><span class="menu-text">List Layout</span></a>
									<ul class="sub-menu">
										<li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
										<li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
										<li><a href="blog-list-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
									</ul>
								</li>
								<li class="has-children"><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Masonry Layout</span></a>
									<ul class="sub-menu">
										<li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
										<li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
										<li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
									</ul>
								</li>
								<li class="has-children"><a href="blog-details-right-sidebar.html"><span class="menu-text">Single Post Layout</span></a>
									<ul class="sub-menu">
										<li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
										<li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
										<li><a href="blog-details-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="has-children"><a href="#"><span class="menu-text">Pages</span></a>
							<ul class="sub-menu">
								<li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
								<li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
								<li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
								<li><a href="coming-soon.html"><span class="menu-text">Coming Soon</span></a></li>
								<li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<div class="header-call">
					<p><i class="fa fa-phone"></i> 0918 206 263</p>
				</div>
			</div>
		</div>
		<!-- Site Menu Section End -->

	</div>
	<!-- Header Section End -->

	<!-- Header Sticky Section Start -->
	<div class="sticky-header header-menu-center section bg-white d-none d-xl-block">
		<div class="container">
			<div class="row align-items-center">

				<!-- Header Logo Start -->
				<div class="col">
					<div class="header-logo">
						<a href="/"><img src="assets/images/logo/logo-2.png" alt="Learts Logo"></a>
					</div>
				</div>
				<!-- Header Logo End -->

				<!-- Search Start -->
				<div class="col d-none d-xl-block">
					<nav class="site-main-menu justify-content-center">
						<ul>
							<li class="has-children"><a href="#"><span class="menu-text">Home</span></a>
								<ul class="sub-menu mega-menu">
									<li>
										<a href="#" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
										<ul>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-01.jpg"> <a href="/"><span class="menu-text">Arts Propelled</span></a></li>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-02.jpg"> <a href="index-2.html"><span class="menu-text">Decor Thriving</span></a></li>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-03.jpg"> <a href="index-3.html"><span class="menu-text">Savvy Delight</span></a></li>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-04.jpg"> <a href="index-4.html"><span class="menu-text">Perfect Escapes</span></a></li>
										</ul>
									</li>
									<li>
										<a href="index-2.html" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
										<ul>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-05.jpg"> <a href="index-5.html"><span class="menu-text">Kitchen Cozy</span></a></li>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-06.jpg"> <a href="index-6.html"><span class="menu-text">Dreamy Designs</span></a></li>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-07.jpg"> <a href="index-7.html"><span class="menu-text">Crispy Recipes</span></a></li>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-08.jpg"> <a href="index-8.html"><span class="menu-text">Decoholic Chic</span></a></li>
										</ul>
									</li>
									<li>
										<a href="index-2.html" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
										<ul>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-9.jpg"> <a href="index-9.html"><span class="menu-text">Reblended Dish</span></a></li>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-10.jpg"> <a href="index-10.html"><span class="menu-text">Craftin House</span></a></li>
											<li> <img class="mmh_img " src="assets/images/demo/menu/home-11.jpg"> <a href="index-11.html"><span class="menu-text">Craftswork Biz</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#" class="menu-banner"><img src="assets/images/banner/menu-banner-1.jpg" alt="Home Menu Banner"></a>
									</li>
								</ul>
							</li>
							<li class="has-children"><a href="#"><span class="menu-text">Shop</span></a>
								<ul class="sub-menu mega-menu">
									<li>
										<a href="#" class="mega-menu-title"><span class="menu-text">SHOP PAGES</span></a>
										<ul>
											<li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
											<li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
											<li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
											<li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop Fullwidth No Space</span></a></li>
											<li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No Sidebar</span></a></li>
											<li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop Fullwidth Left Sidebar</span></a></li>
											<li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop Fullwidth Right Sidebar</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT PAGES</span></a>
										<ul>
											<li><a href="product-details.html"><span class="menu-text">Basic</span></a></li>
											<li><a href="product-details-fullwidth.html"><span class="menu-text">Fullwidth</span></a></li>
											<li><a href="product-details-sticky.html"><span class="menu-text">Sticky Details</span></a></li>
											<li><a href="product-details-sidebar.html"><span class="menu-text">Width Sidebar</span></a></li>
											<li><a href="product-details-extra-content.html"><span class="menu-text">Extra Content</span></a></li>
											<li><a href="product-details-image-variation.html"><span class="menu-text">Variations Images</span></a></li>
											<li><a href="product-details-group.html"><span class="menu-text">Bought Together</span></a></li>
											<li><a href="product-details-360.html"><span class="menu-text">Product 360</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
										<ul>
											<li><a href="product-details-background.html"><span class="menu-text">Product with Background</span></a></li>
											<li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
											<li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
											<li><a href="order-tracking.html"><span class="menu-text">Order Tracking</span></a></li>
											<li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
											<li><a href="login-register.html"><span class="menu-text">Customer Login</span></a></li>
											<li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
											<li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a></li>
										</ul>
									</li>
									<li class="align-self-center">
										<a href="#" class="menu-banner"><img src="assets/images/banner/menu-banner-2.png" alt="Shop Menu Banner"></a>
									</li>
								</ul>
							</li>
							<li class="has-children"><a href="#"><span class="menu-text">Project</span></a>
								<ul class="sub-menu">
									<li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
									<li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
									<li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
									<li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
								</ul>
							</li>
							<li class="has-children"><a href="#"><span class="menu-text">Elements</span></a>
								<ul class="sub-menu mega-menu">
									<li>
										<a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
										<ul>
											<li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
											<li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
											<li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
										<ul>
											<li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
											<li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
											<li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
										<ul>
											<li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
											<li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
											<li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
										<ul>
											<li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
											<li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
											<li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="has-children"><a href="#"><span class="menu-text">Blog</span></a>
								<ul class="sub-menu">
									<li class="has-children"><a href="blog-right-sidebar.html"><span class="menu-text">Standard Layout</span></a>
										<ul class="sub-menu">
											<li><a href="blog-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
											<li><a href="blog-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
											<li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
										</ul>
									</li>
									<li class="has-children"><a href="blog-grid-right-sidebar.html"><span class="menu-text">Grid Layout</span></a>
										<ul class="sub-menu">
											<li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
											<li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
											<li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
										</ul>
									</li>
									<li class="has-children"><a href="blog-list-right-sidebar.html"><span class="menu-text">List Layout</span></a>
										<ul class="sub-menu">
											<li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
											<li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
											<li><a href="blog-list-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
										</ul>
									</li>
									<li class="has-children"><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Masonry Layout</span></a>
										<ul class="sub-menu">
											<li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
											<li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
											<li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
										</ul>
									</li>
									<li class="has-children"><a href="blog-details-right-sidebar.html"><span class="menu-text">Single Post Layout</span></a>
										<ul class="sub-menu">
											<li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
											<li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
											<li><a href="blog-details-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="has-children"><a href="#"><span class="menu-text">Pages</span></a>
								<ul class="sub-menu">
									<li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
									<li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
									<li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
									<li><a href="coming-soon.html"><span class="menu-text">Coming Soon</span></a></li>
									<li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				<!-- Search End -->

				<!-- Header Tools Start -->
				<div class="col-auto">
					<div class="header-tools justify-content-end">
						<div class="header-login">
							<a href="my-account.html"><i class="fal fa-user"></i></a>
						</div>
						<div class="header-search d-none d-sm-block">
							<a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
						</div>
						<div class="header-wishlist">
							<a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>
						</div>
						<div class="header-cart">
							<a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
						</div>
						<div class="mobile-menu-toggle d-xl-none">
							<a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
								<svg viewBox="0 0 800 600">
									<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
									<path d="M300,320 L540,320" id="middle"></path>
									<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<!-- Header Tools End -->

			</div>
		</div>

	</div>
	<!-- Header Sticky Section End -->
	<!-- Mobile Header Section Start -->
	<div class="mobile-header bg-white section d-xl-none">
		<div class="container">
			<div class="row align-items-center">

				<!-- Header Logo Start -->
				<div class="col">
					<div class="header-logo">
						<a href="/"><img src="assets/images/logo/logo-2.png" alt="Learts Logo"></a>
					</div>
				</div>
				<!-- Header Logo End -->

				<!-- Header Tools Start -->
				<div class="col-auto">
					<div class="header-tools justify-content-end">
						<div class="header-login d-none d-sm-block">
							<a href="my-account.html"><i class="fal fa-user"></i></a>
						</div>
						<div class="header-search d-none d-sm-block">
							<a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
						</div>
						<div class="header-wishlist d-none d-sm-block">
							<a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>
						</div>
						<div class="header-cart">
							<a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
						</div>
						<div class="mobile-menu-toggle">
							<a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
								<svg viewBox="0 0 800 600">
									<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
									<path d="M300,320 L540,320" id="middle"></path>
									<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<!-- Header Tools End -->

			</div>
		</div>
	</div>
	<!-- Mobile Header Section End -->

	<!-- Mobile Header Section Start -->
	<div class="mobile-header sticky-header bg-white section d-xl-none">
		<div class="container">
			<div class="row align-items-center">

				<!-- Header Logo Start -->
				<div class="col">
					<div class="header-logo">
						<a href="/"><img src="assets/images/logo/logo-2.png" alt="Learts Logo"></a>
					</div>
				</div>
				<!-- Header Logo End -->

				<!-- Header Tools Start -->
				<div class="col-auto">
					<div class="header-tools justify-content-end">
						<div class="header-login d-none d-sm-block">
							<a href="my-account.html"><i class="fal fa-user"></i></a>
						</div>
						<div class="header-search d-none d-sm-block">
							<a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
						</div>
						<div class="header-wishlist d-none d-sm-block">
							<a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>
						</div>
						<div class="header-cart">
							<a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
						</div>
						<div class="mobile-menu-toggle">
							<a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
								<svg viewBox="0 0 800 600">
									<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
									<path d="M300,320 L540,320" id="middle"></path>
									<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<!-- Header Tools End -->

			</div>
		</div>
	</div>
	<!-- Mobile Header Section End -->
	<!-- OffCanvas Search Start -->
	<div id="offcanvas-search" class="offcanvas offcanvas-search">
		<div class="inner">
			<div class="offcanvas-search-form">
				<button class="offcanvas-close">×</button>
				<form action="#">
					<div class="row mb-n3">
						<div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
						<div class="col-lg-4 col-12 mb-3">
							<select class="search-select select2-basic">
								<option value="0">All Categories</option>
								<option value="kids-babies">Kids &amp; Babies</option>
								<option value="home-decor">Home Decor</option>
								<option value="gift-ideas">Gift ideas</option>
								<option value="kitchen">Kitchen</option>
								<option value="toys">Toys</option>
								<option value="kniting-sewing">Kniting &amp; Sewing</option>
								<option value="pots">Pots</option>
							</select>
						</div>
					</div>
				</form>
			</div>
			<p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span># Hit enter to search or ESC to close</span></p>

		</div>
	</div>
	<!-- OffCanvas Search End -->

	<!-- OffCanvas Wishlist Start -->
	<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
		<div class="inner">
			<div class="head">
				<span class="title">Wishlist</span>
				<button class="offcanvas-close">×</button>
			</div>
			<div class="body customScroll">
				<ul class="minicart-product-list">
					<li>
						<a href="product-details.html" class="image"><img src="assets/images/product/cart-product-1.jpg" alt="Cart product Image"></a>
						<div class="content">
							<a href="product-details.html" class="title">Walnut Cutting Board</a>
							<span class="quantity-price">1 x <span class="amount">$100.00</span></span>
							<a href="#" class="remove">×</a>
						</div>
					</li>
					<li>
						<a href="product-details.html" class="image"><img src="assets/images/product/cart-product-2.jpg" alt="Cart product Image"></a>
						<div class="content">
							<a href="product-details.html" class="title">Lucky Wooden Elephant</a>
							<span class="quantity-price">1 x <span class="amount">$35.00</span></span>
							<a href="#" class="remove">×</a>
						</div>
					</li>
					<li>
						<a href="product-details.html" class="image"><img src="assets/images/product/cart-product-3.jpg" alt="Cart product Image"></a>
						<div class="content">
							<a href="product-details.html" class="title">Fish Cut Out Set</a>
							<span class="quantity-price">1 x <span class="amount">$9.00</span></span>
							<a href="#" class="remove">×</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="foot">
				<div class="buttons">
					<a href="wishlist.html" class="btn btn-dark btn-hover-primary">view wishlist</a>
				</div>
			</div>
		</div>
	</div>
	<!-- OffCanvas Wishlist End -->

	<!-- OffCanvas Cart Start -->
	<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
		<div class="inner">
			<div class="head">
				<span class="title">Cart</span>
				<button class="offcanvas-close">×</button>
			</div>
			<div class="body customScroll">
				<ul class="minicart-product-list">
					<li>
						<a href="product-details.html" class="image"><img src="assets/images/product/cart-product-1.jpg" alt="Cart product Image"></a>
						<div class="content">
							<a href="product-details.html" class="title">Walnut Cutting Board</a>
							<span class="quantity-price">1 x <span class="amount">$100.00</span></span>
							<a href="#" class="remove">×</a>
						</div>
					</li>
					<li>
						<a href="product-details.html" class="image"><img src="assets/images/product/cart-product-2.jpg" alt="Cart product Image"></a>
						<div class="content">
							<a href="product-details.html" class="title">Lucky Wooden Elephant</a>
							<span class="quantity-price">1 x <span class="amount">$35.00</span></span>
							<a href="#" class="remove">×</a>
						</div>
					</li>
					<li>
						<a href="product-details.html" class="image"><img src="assets/images/product/cart-product-3.jpg" alt="Cart product Image"></a>
						<div class="content">
							<a href="product-details.html" class="title">Fish Cut Out Set</a>
							<span class="quantity-price">1 x <span class="amount">$9.00</span></span>
							<a href="#" class="remove">×</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="foot">
				<div class="sub-total">
					<strong>Subtotal :</strong>
					<span class="amount">$144.00</span>
				</div>
				<div class="buttons">
					<a href="shopping-cart.html" class="btn btn-dark btn-hover-primary">view cart</a>
					<a href="checkout.html" class="btn btn-outline-dark">checkout</a>
				</div>
				<p class="minicart-message">Free Shipping on All Orders Over $100!</p>
			</div>
		</div>
	</div>
	<!-- OffCanvas Cart End -->

	<!-- OffCanvas Search Start -->
	<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
		<div class="inner customScroll">
			<div class="offcanvas-menu-search-form">
				<form action="#">
					<input type="text" placeholder="Search...">
					<button><i class="fal fa-search"></i></button>
				</form>
			</div>
			<div class="offcanvas-menu">
				<ul>
					<li><a href="#"><span class="menu-text">Home</span></a>
						<ul class="sub-menu">
							<li>
								<a href="#"><span class="menu-text">Home Group</span></a>
								<ul class="sub-menu">
									<li><a href="/"><span class="menu-text">Arts Propelled</span></a></li>
									<li><a href="index-2.html"><span class="menu-text">Decor Thriving</span></a></li>
									<li><a href="index-3.html"><span class="menu-text">Savvy Delight</span></a></li>
									<li><a href="index-4.html"><span class="menu-text">Perfect Escapes</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#"><span class="menu-text">Home Group</span></a>
								<ul class="sub-menu">
									<li><a href="index-5.html"><span class="menu-text">Kitchen Cozy</span></a></li>
									<li><a href="index-6.html"><span class="menu-text">Dreamy Designs</span></a></li>
									<li><a href="index-7.html"><span class="menu-text">Crispy Recipes</span></a></li>
									<li><a href="index-8.html"><span class="menu-text">Decoholic Chic</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#"><span class="menu-text">Home Group</span></a>
								<ul class="sub-menu">
									<li><a href="index-9.html"><span class="menu-text">Reblended Dish</span></a></li>
									<li><a href="index-10.html"><span class="menu-text">Craftin House</span></a></li>
									<li><a href="index-11.html"><span class="menu-text">Craftswork Biz</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#"><span class="menu-text">Shop</span></a>
						<ul class="sub-menu">
							<li>
								<a href="#"><span class="menu-text">Shop Pages</span></a>
								<ul class="sub-menu">
									<li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
									<li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
									<li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
									<li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop Fullwidth No Space</span></a></li>
									<li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No Sidebar</span></a></li>
									<li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop Fullwidth Left Sidebar</span></a></li>
									<li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop Fullwidth Right Sidebar</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#"><span class="menu-text">Product Pages</span></a>
								<ul class="sub-menu">
									<li><a href="product-details.html"><span class="menu-text">Basic</span></a></li>
									<li><a href="product-details-fullwidth.html"><span class="menu-text">Fullwidth</span></a></li>
									<li><a href="product-details-sticky.html"><span class="menu-text">Sticky Details</span></a></li>
									<li><a href="product-details-sidebar.html"><span class="menu-text">Width Sidebar</span></a></li>
									<li><a href="product-details-extra-content.html"><span class="menu-text">Extra Content</span></a></li>
									<li><a href="product-details-image-variation.html"><span class="menu-text">Variations Images</span></a></li>
									<li><a href="product-details-group.html"><span class="menu-text">Bought Together</span></a></li>
									<li><a href="product-details-360.html"><span class="menu-text">Product 360</span></a></li>
									<li><a href="product-details-background.html"><span class="menu-text">Product with Background</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
								<ul class="sub-menu">
									<li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
									<li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
									<li><a href="order-tracking.html"><span class="menu-text">Order Tracking</span></a></li>
									<li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
									<li><a href="login-register.html"><span class="menu-text">Customer Login</span></a></li>
									<li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
									<li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#"><span class="menu-text">Project</span></a>
						<ul class="sub-menu">
							<li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
							<li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
							<li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
							<li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
						</ul>
					</li>
					<li><a href="#"><span class="menu-text">Elements</span></a>
						<ul class="sub-menu">
							<li>
								<a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
								<ul class="sub-menu">
									<li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
									<li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
									<li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
								<ul class="sub-menu">
									<li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
									<li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
									<li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
								<ul class="sub-menu">
									<li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
									<li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
									<li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
								<ul class="sub-menu">
									<li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
									<li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
									<li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#"><span class="menu-text">Blog</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span class="menu-text">Standard Layout</span></a>
								<ul class="sub-menu">
									<li><a href="blog-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
									<li><a href="blog-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
									<li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-text">Grid Layout</span></a>
								<ul class="sub-menu">
									<li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
									<li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
									<li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-text">List Layout</span></a>
								<ul class="sub-menu">
									<li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
									<li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
									<li><a href="blog-list-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-text">Masonry Layout</span></a>
								<ul class="sub-menu">
									<li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
									<li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
									<li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
								</ul>
							</li>
							<li><a href="#"><span class="menu-text">Single Post Layout</span></a>
								<ul class="sub-menu">
									<li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
									<li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
									<li><a href="blog-details-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#"><span class="menu-text">Pages</span></a>
						<ul class="sub-menu">
							<li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
							<li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
							<li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
							<li><a href="coming-soon.html"><span class="menu-text">Coming Soon</span></a></li>
							<li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="offcanvas-buttons">
				<div class="header-tools">
					<div class="header-login">
						<a href="my-account.html"><i class="fal fa-user"></i></a>
					</div>
					<div class="header-wishlist">
						<a href="wishlist.html"><span>3</span><i class="fal fa-heart"></i></a>
					</div>
					<div class="header-cart">
						<a href="shopping-cart.html"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
					</div>
				</div>
			</div>
			<div class="offcanvas-social">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
	<!-- OffCanvas Search End -->

	<div class="offcanvas-overlay"></div>

	@yield('content')

	<div class="footer4-section bg-light section section-fluid section-padding">
		<div class="container">
			<div class="row learts-mb-n40">

				<div class="col-xl-4 col-lg-5 col-12 learts-mb-40">
					<div class="widget-contact">
						<p class="email">contact@learts.com</p>
						<p class="phone">(+88) 123 4566 6868</p>
						<p class="copyright learts-mt-40">&copy; 2020 learts. All Rights Reserved</a></p>
					</div>
				</div>

				<div class="col-xl-4 col-lg-7 col-12 learts-mb-40">
					<div class="row row-cols-sm-3 row-cols-1 learts-mb-n40">
						<div class="col learts-mb-40">
							<ul class="widget-list">
								<li><a href="#">Men</a></li>
								<li><a href="#">Women</a></li>
								<li><a href="#">Accessories</a></li>
								<li><a href="#">Flash sale</a></li>
							</ul>
						</div>
						<div class="col learts-mb-40">
							<ul class="widget-list">
								<li><a href="#">About us</a></li>
								<li><a href="#">Store location</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Support Policy</a></li>
								<li><a href="#">FAQs</a></li>
							</ul>
						</div>
						<div class="col learts-mb-40">
							<ul class="widget-list">
								<li> <i class="fab fa-twitter"></i> <a href="https://www.twitter.com/">Twitter</a></li>
								<li> <i class="fab fa-facebook-f"></i> <a href="https://www.facebook.com/">Facebook</a></li>
								<li> <i class="fab fa-instagram"></i> <a href="https://www.instagram.com/">Instagram</a></li>
								<li> <i class="fab fa-youtube"></i> <a href="https://www.youtube.com/">Youtube</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-12 learts-mb-40">
					<h5 class="widget-title mb-2">Newsletter</h5>
					<form id="mc-form" class="mc-form widget-subscibe2">
						<input id="mc-email" autocomplete="off" type="email" placeholder="Enter your e-mail address">
						<button id="mc-submit" class="btn">subscibe</button>
					</form>
					<!-- mailchimp-alerts Start -->
					<div class="mailchimp-alerts text-centre">
						<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
						<div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
						<div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
					</div><!-- mailchimp-alerts end -->
				</div>

			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="quickViewModal modal fade" id="quickViewModal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<button class="close" data-dismiss="modal">&times;</button>
				<div class="row learts-mb-n30">

					<!-- Product Images Start -->
					<div class="col-lg-6 col-12 learts-mb-30">
						<div class="product-images">
							<div class="product-gallery-slider-quickview">
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
						</div>
					</div>
					<!-- Product Images End -->

					<!-- Product Summery Start -->
					<div class="col-lg-6 col-12 overflow-hidden learts-mb-30">
						<div class="product-summery customScroll">
							<div class="product-ratings">
								<span class="star-rating">
								<span class="rating-active" style="width: 100%;">ratings</span>
								</span>
								<a href="#reviews" class="review-link">(<span class="count">3</span> customer reviews)</a>
							</div>
							<h3 class="product-title">Cleaning Dustpan & Brush</h3>
							<div class="product-price">£38.00 – £50.00</div>
							<div class="product-description">
								<p>Easy clip-on handle – Hold the brush and dustpan together for storage; the dustpan edge is serrated to allow easy scraping off the hair without entanglement. High-quality bristles – no burr damage, no scratches, thick and durable, comfortable to remove dust and smaller particles.</p>
							</div>
							<div class="product-variations">
								<table>
									<tbody>
										<tr>
											<td class="label"><span>Size</span></td>
											<td class="value">
												<div class="product-sizes">
													<a href="#">Large</a>
													<a href="#">Medium</a>
													<a href="#">Small</a>
												</div>
											</td>
										</tr>
										<tr>
											<td class="label"><span>Color</span></td>
											<td class="value">
												<div class="product-colors">
													<a href="#" data-bg-color="#000000"></a>
													<a href="#" data-bg-color="#ffffff"></a>
												</div>
											</td>
										</tr>
										<tr>
											<td class="label"><span>Quantity</span></td>
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
								<a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="fal fa-heart"></i></a>
								<a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="fal fa-shopping-cart"></i> Add to Cart</a>
								<a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="fal fa-random"></i></a>
							</div>
							<div class="product-brands">
								<span class="title">Brands</span>
								<div class="brands">
									<a href="#"><img src="assets/images/brands/brand-3.png" alt=""></a>
									<a href="#"><img src="assets/images/brands/brand-8.png" alt=""></a>
								</div>
							</div>
							<div class="product-meta mb-0">
								<table>
									<tbody>
										<tr>
											<td class="label"><span>SKU</span></td>
											<td class="value">0404019</td>
										</tr>
										<tr>
											<td class="label"><span>Category</span></td>
											<td class="value">
												<ul class="product-category">
													<li><a href="#">Kitchen</a></li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="label"><span>Tags</span></td>
											<td class="value">
												<ul class="product-tags">
													<li><a href="#">handmade</a></li>
													<li><a href="#">learts</a></li>
													<li><a href="#">mug</a></li>
													<li><a href="#">product</a></li>
													<li><a href="#">learts</a></li>
												</ul>
											</td>
										</tr>
										<tr>
											<td class="label"><span>Share on</span></td>
											<td class="va">
												<div class="product-share">
													<a href="#"><i class="fab fa-facebook-f"></i></a>
													<a href="#"><i class="fab fa-twitter"></i></a>
													<a href="#"><i class="fab fa-google-plus-g"></i></a>
													<a href="#"><i class="fab fa-pinterest"></i></a>
													<a href="#"><i class="fal fa-envelope"></i></a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Product Summery End -->

				</div>
			</div>
		</div>
	</div>

	<!-- JS
============================================ -->

	<!-- Vendors JS -->
	<!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script> -->

	<!-- Plugins JS -->
	<!-- <script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/swiper.min.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/mo.min.js"></script>
<script src="assets/js/plugins/jquery.instagramFeed.min.js"></script>
<script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
<script src="assets/js/plugins/jquery.matchHeight-min.js"></script>
<script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
<script src="assets/js/plugins/photoswipe.min.js"></script>
<script src="assets/js/plugins/photoswipe-ui-default.min.js"></script>
<script src="assets/js/plugins/jquery.zoom.min.js"></script>
<script src="assets/js/plugins/ResizeSensor.js"></script>
<script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
<script src="assets/js/plugins/product360.js"></script>
<script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugins/jquery.scrollUp.min.js"></script>
<script src="assets/js/plugins/scrollax.min.js"></script> -->

	<!-- Use the minified version files listed below for better performance and remove the files listed above -->
	<script src="assets/js/vendor/vendor.min.js"></script>
	<script src="assets/js/plugins/plugins.min.js"></script>

	<!-- Main Activation JS -->
	<script src="assets/js/main.js"></script>

</body>
</html>

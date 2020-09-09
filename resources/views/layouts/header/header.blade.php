<!-- Header Section Start -->
<div class="header-section section bg-white d-none d-xl-block">
	<div class="container">
		<div class="row justify-content-between align-items-center">

			<!-- Header Logo Start -->
			<div class="col-auto">
				<div class="header-logo justify-content-center">
					<a href="/"><img src="/assets/images/logo/logo.png" alt="@lang('Logo')"></a>
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
						</div> --}}
					<div class="header-cart">
						<a href="#offcanvas-cart" class="offcanvas-toggle">
							<span class="cart-count">
								{{ $cart->count() }}
							</span>
							<i class="fal fa-shopping-cart"></i>
						</a>
					</div>
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
					<i class="fal fa-bars"></i> @lang('Browse Categories')</button>
				<ul class="header-category-list">
					@foreach($categories as $category)
						<li>
							<a href="{{ route('category', ['category' => $category]) }}">
								<img src="" alt="">{{ $category->name }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- Site Menu Section End -->

</div>
<!-- Header Section End -->

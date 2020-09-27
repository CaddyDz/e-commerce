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

			<!-- Header Tools Start -->
			<div class="col-auto">
				<div class="header-tools justify-content-end">
					<div class="header-login">
						<a href="{{ route('home') }}">
							<i class="fal fa-user"></i>
						</a>
					</div>
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
					<i class="fal fa-bars"></i> @lang('Browse Categories')
				</button>
				<ul class="header-category-list">
					<li>
						<a href="/">
							@lang('Home')
						</a>
					</li>
					@foreach($categories as $category)
					<li>
						<a href="{{ route('category', ['category' => $category]) }}">
							{{ $category->name }}
						</a>
					</li>
					@endforeach
				</ul>
			</div>
			<nav class="site-main-menu justify-content-center menu-height-60">
				<ul>
					<li>
						<a href="/"><span class="menu-text">@lang('Home')</span></a>
					</li>
					<li>
						<a href="/about">
							<span class="menu-text">@lang('About us')</span>
						</a>
					</li>
					<li>
						<a href="/shipping">
							<span class="menu-text">
								@lang('Shipping policy')
							</span>
						</a>
					</li>
					<li>
						<a href="/faq">
							<span class="menu-text">
								FAQs?
							</span>
						</a>
					</li>
				</ul>
			</nav>
			<div class="header-call">
				<p><i class="fa fa-phone"></i> <a href="tel:0793803812">0793803812</a></p>
			</div>
		</div>
	</div>
	<!-- Site Menu Section End -->
</div>
<!-- Header Section End -->

<!-- Header Sticky Section Start -->
<div class="sticky-header header-menu-center section bg-white d-none d-xl-block">
	<div class="container">
		<div class="row align-items-center">

			<!-- Header Logo Start -->
			<div class="col">
				<div class="header-logo">
					<a href="/">
						<img src="/assets/images/logo/logo.png" alt="@lang('Logo')" width="90">
					</a>
				</div>
			</div>
			<!-- Header Logo End -->

			<!-- Search Start -->
			<div class="col d-none d-xl-block">
				<nav class="site-main-menu">
					<ul>
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
			</div>
			<!-- Search End -->

			<!-- Header Tools Start -->
			<div class="col-auto">
				<div class="header-tools justify-content-end">
					<div class="header-login">
						<a href="/home"><i class="fal fa-user"></i></a>
					</div>
					<div class="header-cart">
						<a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">{{ $cart->count() }}</span><i class="fal fa-shopping-cart"></i></a>
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

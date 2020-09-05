<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
	<div class="inner customScroll">
		<div class="offcanvas-menu">
			<ul>
				<li>
					<a href="/">
						<span class="menu-text">
							@lang('Home')
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="menu-text">
							@lang('Categories')
						</span>
					</a>
					<ul class="sub-menu">
						@foreach($categories as $category)
							<li>
								<a href="{{ route('category', ['category' => $category]) }}">
									<span class="menu-text">
										{{ $category->name }}
									</span>
								</a>
							</li>
						@endforeach
					</ul>
				</li>
				<li>
					<a href="/about">
						<span class="menu-text">
							@lang('About us')
						</span>
					</a>
				</li>
				<li>
					<a href="/tos">
						<span class="menu-text">
							@lang('Shipping policy')
						</span>
					</a>
				</li>
				<li>
					<a href="/faq">
						<span class="menu-text">
							@lang('FAQ')
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="offcanvas-buttons">
			<div class="header-tools">
				<div class="header-login">
					<a href="/home"><i class="fal fa-user"></i></a>
				</div>
				<div class="header-cart">
					<a href="/cart"><span class="cart-count">{{ $cart->count() }}</span><i class="fal fa-shopping-cart"></i></a>
				</div>
			</div>
		</div>
		<div class="offcanvas-social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			
			<a href="#"><i class="fab fa-instagram"></i></a>
			
		</div>
	</div>
</div>

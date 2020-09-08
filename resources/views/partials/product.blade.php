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
			<a href="#quickViewModal-{{ $product->id }}" data-toggle="modal" class="product-button hintT-top" data-hint="@lang('Quick View')">
				<i class="fal fa-search"></i>
			</a>
			<a class="product-button hintT-top" data-hint="@lang('Add to Cart')" onclick="event.preventDefault();document.getElementById('{{ $product->slug }}').submit();">
				<i class="fal fa-shopping-cart"></i>
			</a>
			<form action="{{ route('cart.add', ['product' => $product]) }}" method="post" id="{{ $product->slug }}">
				@csrf
			</form>
		</div>
	</div>
</div>
@include('partials.quickview')

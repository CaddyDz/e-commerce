<h3 class="product-title">{{ $product->name }}</h3>
<div class="product-price">{{ $product->newPrice }} Dzd </div>
<div class="product-description">
	<p>{{ $product->descrption }}</p>
</div>
<form action="{{ route('cart.add', ['product' => $product]) }}" method="post">
	@csrf
	<div class="product-variations">
		<table>
			<tbody>
				@if($product->display_sizes && $product->sizes->isNotEmpty())
					<tr>
						<td class="label"><span>@lang('Available Sizes')</span></td>
						<td class="value">
							<div class="product-sizes">
								@foreach($product->sizes as $size)
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
								@foreach($product->colors as $color)
									<a href="#" data-bg-color="{{ $color->color }}">
									</a>
								@endforeach
							</div>
						</td>
					</tr>
				@endif
				@if($product->properties->isNotEmpty())
					@foreach($product->properties as $property)
						<tr>
							<td class="label">
								<span>
									{{ $property->key }}
								</span>
							</td>
							<td class="value">
								{{ $property->value }}
							</td>
						</tr>
					@endforeach
				@endif
				<tr>
					<td class="label"><span>@lang('Quantity')</span></td>
					<td class="value">
						<div class="product-quantity">
							<span class="qty-btn minus"><i class="ti-minus"></i></span>
							<input type="text" class="input-qty" value="1" name="quantity" required>
							<span class="qty-btn plus"><i class="ti-plus"></i></span>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="product-buttons">
		<button class="btn btn-dark btn-outline-hover-dark" type="submit">
			<i class="fal fa-shopping-cart"></i> @lang('Add to Cart')
		</button>
	</div>
</form>
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
						<li>
							<a href="{{ route('category', ['category' => $product->brand->category]) }}">
								{{ $product->brand->category->name }}
							</a>
						</li>
					</ul>
				</td>
			</tr>
		</tbody>
	</table>
</div>

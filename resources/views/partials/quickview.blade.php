<!-- Modal -->
<div class="quickViewModal modal fade" id="quickViewModal-{{ $product->id }}">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button class="close" data-dismiss="modal">&times;</button>
			<div class="row learts-mb-n30">
				<!-- Product Images Start -->
				<div class="col-lg-6 col-12 learts-mb-30">
					<div class="product-images">
						<div class="product-gallery-slider-quickview">
							<div class="product-zoom" data-image="{{ $product->image }}">
								<img src="{{ secure_asset('storage/' . $product->image) }}" alt="@lang('Photo')">
							</div>
							@foreach($product->images as $image)
								<div class="product-zoom" data-image="{{ $image->getUrl() }}">
									<img src="{{ $image->getUrl() }}" alt="@lang('Photo')">
								</div>
							@endforeach
						</div>
					</div>
				</div>
				<!-- Product Images End -->

				<!-- Product Summary Start -->
				<div class="col-lg-6 col-12 overflow-hidden learts-mb-30">
					<div class="product-summary customScroll">
						@include('partials.product_summary')
					</div>
				</div>
				<!-- Product Summary End -->
			</div>
		</div>
	</div>
</div>

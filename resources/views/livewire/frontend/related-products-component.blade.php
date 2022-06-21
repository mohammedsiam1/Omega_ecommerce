<div>
<section class="section related-products second-style pt-0">
	<div class="container">
		<div class="section-title text-center">
			<h3><i class="line"></i>Related Products<i class="line"></i></h3>
		</div>
		<div id="related-products" class="owl-carousel">
			
				@forelse($relatedProducts as $relatedProduct)
			<div class="product" data-product-id="1">
				<div class="inner-product">
					<div class="product-thumbnail">
					<a class="d-block" href="{{ route('frontend.product', $relatedProduct->slug) }}">
						<img src="{{ asset('assets/products/'. $relatedProduct->firstMedia->file_name) }}" class="img-fluid" alt="{{$relatedProduct->name}}">
					</a>
					</div>
					<div class="product-details text-center">
                    <div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a wire:click.prevent="addToCart('{{ $relatedProduct->id }}')" class="li-icon"><i class="bx bxs-cart"></i></a>
										</span>
										<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a  wire:click.prevent="addToWishList('{{$relatedProduct->id}}')" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
										
										
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a  href="{{route('frontend.product',$relatedProduct->slug)}}"
											data-target="#productView"
											 class="li-icon view-details">
											 <i class="bx bx-search"></i>
											</a>
									</span>
								</div>
					</div>
				</div>
				<h3 class="product-title"><a href="{{ route('frontend.product', $relatedProduct->slug) }}">{{$relatedProduct->name}}</a></h3>
				
				<p class="product-price">
					<ins>
						<span class="amount">${{$relatedProduct->price}}</span>
					</ins>
				</p>
			</div><!-- /.product -->
				@empty

				@endforelse


		</div>
	</div><!-- /.container -->
</section><!-- /.related-products -->


</div>

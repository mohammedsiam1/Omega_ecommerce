<div wire:ignore>
<section class="section products second-style" id="home-products">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-title text-center">
				<h3><i class="line"></i>Latest Products<i class="line"></i></h3>
				<p>Lorem Ipsum is simply dummy text.</p>
			</div>
			<div class="col-sm-12">
				<div class="masonry row">
                    @forelse($featured_product as $featuredProduct)
					<div class="product col-lg-3 col-md-6" data-product-id="1">
						<div class="inner-product">
							<span class="onsale">Sale!</span>
							<div class="product-thumbnail">
								<img src="{{asset('assets/products/' . $featuredProduct->firstMedia->file_name)}}" class="img-fluid" alt="{{$featuredProduct->name}}">
							</div>
							<div class="product-details text-center">
								<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a wire:click.prevent="addToCart({{ $featuredProduct->id }})" class="li-icon"><i class="bx bxs-cart"></i></a>
										</span>
										<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a  wire:click.prevent="addToWishList('{{$featuredProduct->id}}')" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
										
										
									<span data-toggle="tooltip" data-placement="top" title="View">
											<a  href="{{route('frontend.product',$featuredProduct->slug)}}"
											data-target="#productView"
											 class="li-icon view-details">
											 <i class="bx bx-search"></i>
											</a>
									</span>
									<!-- wire:click="$emit('showProductModalAction', '{{ $featuredProduct->slug }}')" -->
								</div>
							</div>
						</div>
						<h3 class="product-title" style="font-size: 16px;" ><a href="#!" >{{$featuredProduct->name}}</a></h3>
					
						<p class="product-price">
							<ins>
								<span class="amount">${{$featuredProduct->price}}</span>
							</ins>
							<!-- <del>
								<span class="amount">$150.00</span>
							</del> -->
						</p>
					</div><!-- /product -->
                    @empty
                    @endforelse
			
				</div>
			</div>
			<!-- <div class="col-sm-12 text-center">
				<a href="#!" class="btn btn-primary">Show More</a>
			</div> -->
		</div>
	</div>
</section>

</div>
<livewire:frontend.product-modal-shared/>

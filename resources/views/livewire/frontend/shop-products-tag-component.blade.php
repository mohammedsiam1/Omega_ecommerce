<div>
	<section class="section products second-style">

		<div class="container">
			<div class="col-lg-6 mb-2 mb-lg-0">
				<p class="text-small text-muted mb-0">Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results</p>
			</div>
			<div class="row">




				<div class="col-sm-9">
					<div class="masonry row">

						@forelse($products as $product)
						<div class="product col-4" data-product-id="1" id="products-container-area">

							<div class="inner-product">
								<div class="product-thumbnail">
									<a class="d-block" href="{{ route('frontend.product', $product->slug) }}">

										<img class="img-fluid" src="{{ asset('assets/products/' . $product->firstMedia->file_name) }}" alt="{{ $product->name }}">
									</a>
								</div>
								<div class="product-details text-center">
									<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
										<span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
										</span>
										<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
									</div>
								</div>
							</div>
							<h3 class="product-title"><a href="{{ route('frontend.product', $product->slug) }}">{{ $product->name }}</a></h3>

							<p class="product-price">
								<ins>
									<span class="amount">${{ $product->price }}</span>
								</ins>
							</p>
						</div><!-- /.product -->
						@empty
						@endforelse

					</div><!-- /.masonry -->
					{!! $products->appends(request()->all())->onEachSide(1)->links() !!}
				</div>
				<div class="col-md-3">
					<div class="col-sm-12">
						<ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
							<li class="list-inline-item" wire:ignore>
								<select class="form-control" wire:model="sortingBy" data-width="200" data-style="bs-select-form-control" data-title="Default sorting">
									<option value="default">Default sorting</option>
									<option value="popularity">Popularity</option>
									<option value="low-high">Price: Low to High</option>
									<option value="high-low">Price: High to Low</option>
								</select>
							</li>
						
						</ul>
					</div>
					<div class="shop-sidebar shop-sidebar-left">
						<div class="widgets">
							<div class="widget widget-search">
								<br>
								<h3 class="widget-title">What's on your mind<span class="typed-cursor">?</span></h3>

							</div><!-- /.widget-search -->
							<h5 class="text-uppercase mb-4">Categories</h5>
							@foreach($shop_categories_menu as $shop_category)
							<div class="py-2 px-4 bg-dark text-white mb-3">
								<strong class="small text-uppercase font-weight-bold">
									{{ $shop_category->name }}
								</strong>
							</div>
							<ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
								@forelse($shop_category->appearedChildren as $sub_shop_category)
								<li class="mb-2">
									<a class="reset-anchor" href="{{ route('frontend.products', $sub_shop_category->slug)}}">
										{{ $sub_shop_category->name }}
									</a>
								</li>
								@empty
								@endforelse
							</ul>
							@endforeach

							<h5 class="text-uppercase mb-4">Tags</h5>
							<ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
								@forelse($shop_tags_menu as $shop_tag)
								<li class="mb-2">
									<a class="reset-anchor" href="{{ route('frontend.shop_tag', $sub_shop_category->slug)}}">
										{{ $shop_tag->name }}
									</a>
								</li>
								@empty
								@endforelse
							</ul>

						</div><!-- /.widgets -->
					</div><!-- /.shop-sidebar -->
				</div>

			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.products -->
</div>

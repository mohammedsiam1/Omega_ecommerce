@extends('layouts.app')
@section('content')
<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#!">Products</a>
				</li>
				<li class="breadcrumb-item active">Twill Silk Scarf</li>
			</ol>

			<div class="d-flex align-items-center mx-auto mx-md-0 ml-md-auto mt-3 mt-md-0 header-nav">
				<a class="d-inline-flex align-items-center" rel="previous" href="#!">
					<i class="bx bx-chevron-left"></i>
					Previous
				</a>
				<a class="d-inline-flex align-items-center" rel="next" href="#!">
					Next
					<i class="bx bx-chevron-right"></i>
				</a>
			</div>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<section class="section single-product-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="product-images">
				@foreach ($product->media as $media)           <!-- $loop->first -->
                @endforeach
				
					<figure class="product-thumbnail">
						<a href="{{asset('assets/products/' .$media->file_name)}}" data-fancybox="images">
							<img src="{{asset('assets/products/'. $media->file_name)}}" class="img-fluid" alt="{{$product->name}}">
						</a>
					</figure>
					
                
					<div class="product-images-carousel owl-carousel">
					@foreach ($product->media as $media)
						<figure class="item">
							<a href="{{asset('assets/products/'. $media->file_name)}}" data-fancybox="images">
								<img src="{{asset('assets/products/'. $media->file_name)}}" class="img-fluid" alt="{{$product->name}}">
							</a>
						</figure>
						
					
					
					@endforeach
					</div> 
				</div><!-- /.product-images -->
			</div>

			<div class="col-lg-6 col-sm-offset-1">
				<div class="product-details">
					<div class="rating mb-3">
						
						<ul class="list-inline mb-2">
                        @if ($product->reviews_avg_rating != '')
                            @for ($i = 0; $i < 5; $i++)
                                <li class="list-inline-item m-0"><i class="{{ round($product->reviews_avg_rating) <= $i ? 'far' : 'fas' }} fa-star fa-sm text-warning"></i></li>
                            @endfor
                        @else
                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                            <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                        @endif
                    </ul>
						
					</div>

					<div class="product-title">
						<h3 class="product-name">{{$product->name}}</h3>
						<p class="product-available">In Stock / Shipping Available</p>
						<hr class="mt-2">
					</div>

					<div class="description">
					
						{!! $product->description !!}
						</p>
					</div>

					<p class="price">
					
						
						<strong><span class="amount">${{$product->price}}</span></strong>	
						
					</p>

					
						<!-- <div class="product-attributes row">
							<div class="form-group col-md-6">
								<label for="attr_1">Size</label>
								<select class="form-control" id="attr_1">
									<option selected>Choose an option</option>
									<option>Extra Small</option>
									<option>Small</option>
									<option>Medium</option>
									<option>Large</option>
								</select>
							</div>

							<div class="form-group col-md-6">
								<label for="attr_2">Color</label>
								<select class="form-control" id="attr_2">
									<option selected>Choose an option</option>
									<option>Red</option>
									<option>Blue</option>
									<option>Green</option>
									<option>Yellow</option>
								</select>
							</div>
						</div> -->

						
                    <span class="rating-text"> <strong >  Undeer Category : </strong>{{ $product->category->name }}</span><br>
                    <strong > Tags : </strong>
                    @foreach ($product->tags as $tag )
                    <a class="reset-anchor ml-2" href="#{{ $tag->id }}">{{ $tag->name }}  </a>
                    @endforeach

					
					<br><br><br>
					
					
					<livewire:frontend.show-product-component :product="$product"/>
					
					<br><br>
					<div class="product-share">
						<span>Share on</span>
						<ul class="social">
						<li><a href="#!" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#!" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#!" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                        <li><a href="#!" target="_blank"><i class="bx bxl-snapchat"></i></a></li>
						</ul>
					</div>
				</div><!-- /.product-details -->
			</div>

			<div class="col-sm-12">
				<div class="tabs-wrapper">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#tab-description" aria-controls="tab-description"
							   data-toggle="tab">Description</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="#tab-reviews" aria-controls="tab-reviews" data-toggle="tab">Reviews ({{$product->reviews->count()}})</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="tab-description">
						{!! $product->description !!}
						</div>
					
						<div class="tab-pane" id="tab-reviews">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<ol class="reviews">
									@forelse($product->reviews as $review)
										<li class="review">
											<div class="media">
												<div class="media-left media-middle">
													<a href="#!">
														<img class="media-object avatar" src="{{ asset('frontend/img/customer-1.png') }}" alt=""width="50">
													</a>
												</div>
												<div class="media-body">
													<div class="rating float-right">
													<ul class="list-inline mb-1 text-xs">
                                            @if ($review->rating != '')
                                                @for ($i = 0; $i < 5; $i++)
                                                    <li class="list-inline-item m-0">
                                                        <i class="{{ round($review->rating) <= $i ? 'far' : 'fas' }} fa-star fa-sm text-warning"></i>
                                                    </li>
                                                @endfor
                                            @else
                                                <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="far fa-star fa-sm text-warning"></i></li>
                                            @endif
                                        </ul>
													</div>
													<h4 class="media-heading mb-0">{{ $review->name }}</h4>
													<time datetime="2016-06-07T11:44:50+00:00">{{ $review->created_at->format('d M, Y') }}</time>
													<div class="description">
													{!! $review->message !!}
													</div>
												</div>
											</div>
										</li>
										@empty
										No Reviews Yet .
									@endforelse
									

									</ol><!-- /.reviews -->
								</div>
								
							</div><!-- /.row -->
						</div>
					</div>
				</div><!-- /.tabs-wrapper -->
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.products -->

<!-- Related Products -->
<livewire:frontend.related-products-component :relatedProducts="$relatedProducts"/>


@endsection
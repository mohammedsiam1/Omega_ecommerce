@extends('layouts.app')
@section('content')

@include('partial.Frontend.slider')

<section class="section collections pb-0 small-padding-top" id="home-collections">
	<div class="container">
		<div class="row">
			<div class="col-md-6 collection">
				<a href="{{ route('frontend.product', $product_categories[0]->slug) }}">
					<img src="{{asset('assets/product_categories/01.jpg')}}"class="img-fluid" alt="omega_photo">
				</a>
			</div><!-- /.collection -->
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 collection">
						<a href="{{ route('frontend.product', $product_categories[1]->slug) }}">
							<img src="{{asset('assets/product_categories/02.jpg')}}"class="img-fluid" alt="omega_photo">
						</a>
					</div><!-- /.collection -->
					<div class="col-md-6 collection">
						<a href="{{ route('frontend.product', $product_categories[2]->slug) }}">
							<img src="{{asset('assets/product_categories/03.jpg')}}"class="img-fluid" alt="omega_photo">
						</a>
					</div><!-- /.collection -->
					<div class="col-sm-12 collection">
						<a href="{{ route('frontend.product', $product_categories[3]->slug) }}">
							<img src="{{asset('assets/product_categories/04.jpg')}}"class="img-fluid" alt="omega_photo">
						</a>
					</div><!-- /.collection -->
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.collections -->

<section class="section promotions pb-0" id="promotions">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="promotion media">
					<div class="media-left media-middle">
						<i class="bx bx-money"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Money Back</h3>
						<p>Lorem Ipsum is simply dummy text of the printing.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="promotion media">
					<div class="media-left media-middle">
						<i class="bx bx-globe"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">In Worldwide</h3>
						<p>Lorem Ipsum is simply dummy text of the printing.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="promotion media">
					<div class="media-left media-middle">
						<i class="bx bxs-plane"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Free Shipping</h3>
						<p>Lorem Ipsum is simply dummy text of the printing.</p>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.promotions -->

<livewire:frontend.featured-product/>

<section class="section brands pt-0 pb-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="logos" class="owl-carousel">
					<div class="item">
						<a href="#!"><img src="{{asset('frontend/dist/images/brands/5.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{asset('frontend/dist/images/brands/6.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{asset('frontend/dist/images/brands/4.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{asset('frontend/dist/images/brands/7.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{asset('frontend/dist/images/brands/8.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{asset('frontend/dist/images/brands/9.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{asset('frontend/dist/images/brands/1.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{asset('frontend/dist/images/brands/2.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{asset('frontend/dist/images/brands/3.png')}}" class="img-fluid" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- /.brands -->




     <!-- Right Side Of Navbar -->
	 @include('partial.Frontend.search')


<!-- All Theme Scripts -->
@endsection

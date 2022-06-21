<div class="nav-container fixed-top nav-sticky">
	<nav class="sub-navbar bg-white d-flex">

		<div class="col-3" style="  margin-left: 40px;">
			<a class="navbar-brand" href="{{ url('/') }}">
				{{ config('app.name', 'ecommerce') }}
			</a>
			</div>
		 
		<ul class="nav list-inline ml-auto col-2">
			<!-- Authentication Links -->
			@guest
			<li class="nav-item">
				<a   class="px-2" href="{{ route('login') }}">{{ __('Login') }}</a>
			</li>

			<li class="nav-item">
				<a  class="px-2" href="{{ route('register') }}">{{ __('Register') }}</a>
			</li>

			@else
			<li class="nav-item dropdown ">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Welcome, {{ auth()->user()->full_name}}
				</a>

			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{route('customer.dashboard')}}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
									 document.getElementById('logout-form').submit();"
									 data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
			@endguest

		</ul>
		</li>

	</nav><!-- /.sub-navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container">
			<a   class="navbar-brand" href="{{route('frontend.index')}}">
				
				<img  src="{{asset('frontend/dist/images/logo.png' )}}">
			</a>
		
			<livewire:frontend.carts/>
			<button class="navbar-toggler ml-0 ml-sm-3 order-lg-3" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbar" class="collapse navbar-collapse mr-auto">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="{{route('frontend.index')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Home
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-item active"><a class="nav-link" href="#">Default</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{route('frontend.index_2')}}">Default Slider</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{route('frontend.index_3')}}">Overlay Products</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{route('frontend.index_4')}}#instagram">Instagram section</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Shop
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="{{route('frontend.products')}}"> Shop</a></li>
							<li><a class="nav-link" href="{{route('frontend.products_with_filter')}}">Shop With Filter</a></li>
							<li><a class="nav-link" href="{{route('frontend.products_sidebar_left')}}">Sidebar Left</a></li>
							<li><a class="nav-link" href="{{route('frontend.products_sidebar_right')}}">Sidebar Right</a></li>
							<li><a class="nav-link" href="{{route('frontend.product')}}">Simple Product</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							eCommerce Pages
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="{{route('frontend.wishlist')}}">Wishlist</a></li>
							<li><a class="nav-link" href="{{route('frontend.cart')}}">Cart</a></li>
							<li><a class="nav-link" href="{{route('frontend.checkout')}}">Checkout</a></li>
							<li><a class="nav-link" href="{{route('frontend.order_received')}}">Order Received</a></li>
							<li><a class="nav-link" href="{{route('frontend.order_tracking')}}">Order Tracking</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pages
						</a>

					</li>
					<li class="nav-item"><a class="nav-link" href="{{route('frontend.about')}}">About</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('frontend.contact')}}">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container -->
	</nav>
</div><!-- /.nav-container -->
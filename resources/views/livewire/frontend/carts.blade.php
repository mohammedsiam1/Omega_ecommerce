<div class="nav navbar-icons ml-auto order-lg-2">
	<li class="nav-item mr-12 shopping-cart">
		<a href="{{route('frontend.cart')}}" class="li-icon" style="margin-left: -97px;">

			<i class="fa-solid fa-cart-shopping"></i>
			<span class="badge badge-secondary rounded-circle">{{$cartCount}}</span>
		</a>
	</li>


	<li class="nav-item mr-12 shopping-cart">
		<a href="{{route('frontend.wishlist')}}" class="li-icon" style="margin-left: -48px;">

			<i class="fa-solid fa-heart"></i>
			<span class="badge badge-secondary rounded-circle">{{$wishlistCount}}</span>
		</a>
	</li>

	<li class="nav-item">
		<a href="#!" class="li-icon" id="trigger-overlay"><i class="fa-solid fa-magnifying-glass"></i></a>
	</li>

</div>
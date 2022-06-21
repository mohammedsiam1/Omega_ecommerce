@extends('layouts.app')
@section('content')
<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">Order Tracking</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-order-tracking">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<div class="box">
						<h2>Order Tracking</h2>
						<p>
							To track your order please enter your Order ID in the box below and press the "Track" button. This was
							given to you on your receipt and in the confirmation email you should have received.
						</p>
						<form method="POST" class="tracking-form inputs-border inputs-bg">
							<div class="form-group required">
								<input type="text" id="order_id" class="form-control" placeholder="Order ID*">
							</div>
							<div class="form-group required">
								<input type="email" id="billing_email" class="form-control" placeholder="Billing Email*">
							</div>
							<div class="form-group text-right">
								<button type="button" class="btn btn-primary">Track</button>
							</div>
						</form>
					</div><!-- /.box -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-order-tracking -->
</div><!-- /.page-wrapper -->

<footer class="footer">
	<div class="container">
		<div class="widgets">
			<div class="row">
				<div class="col-lg-3 col-md-6 widget widget-about">
					<h3 class="widget-title">Sham</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					</p>
				</div><!-- ./widget -->
				<div class="col-lg-3 col-md-6 widget widget-links">
					<h3 class="widget-title">My Account</h3>
					<div class="row">
						<ul class="list-unstyled col-6">
							<li><a href="#!" class="effect">My Account</a></li>
							<li><a href="#!" class="effect">My Order</a></li>
							<li><a href="#!" class="effect">My Wiseliest</a></li>
							<li><a href="#!" class="effect">My Profile</a></li>
							<li><a href="#!" class="effect">My Address</a></li>
							<li><a href="#!" class="effect">My Products</a></li>
						</ul>
						<ul class="list-unstyled col-6">
							<li><a href="#!" class="effect">About Us</a></li>
							<li><a href="#!" class="effect">Contact</a></li>
							<li><a href="#!" class="effect">Payment</a></li>
							<li><a href="#!" class="effect">Blog</a></li>
							<li><a href="#!" class="effect">FAQ's</a></li>
							<li><a href="#!" class="effect">Order</a></li>
						</ul>
					</div>
				</div><!-- ./widget -->
				<div class="col-lg-3 col-md-6 widget widget-instagram">
					<h3 class="widget-title">Instagram</h3>
					<ul class="row">
						<li class="col-4">
							<a href="#!">
								<img src="/dist/images/products/23.jpg" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="/dist/images/products/20.jpg" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="/dist/images/products/18.jpg" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="/dist/images/products/19.jpg" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="/dist/images/products/24.jpg" class="img-fluid" alt="">
							</a>
						</li>
						<li class="col-4">
							<a href="#!">
								<img src="/dist/images/products/12.jpg" class="img-fluid" alt="">
							</a>
						</li>
					</ul>
				</div><!-- /.widget -->
				<div class="col-lg-3 col-md-6 widget widget-newsletter">
					<h3 class="widget-title">Join our Newsletter</h3>
					<form action="#!" method="POST" class="inputs-border clearfix">
						<div class="form-group">
							<input type="email" name="email" placeholder="Your Email" class="form-control" autocomplete="off">
							<button type="submit" class="btn btn-primary">
								<i class="bx bx-right-arrow-alt"></i>
							</button>
						</div>
					</form>
					<ul class="social">
						<li><a href="#!" target="_blank"><i class="bx bxl-facebook"></i></a></li>
						<li><a href="#!" target="_blank"><i class="bx bxl-twitter"></i></a></li>
						<li><a href="#!" target="_blank"><i class="bx bxl-instagram"></i></a></li>
						<li><a href="#!" target="_blank"><i class="bx bxl-snapchat"></i></a></li>
					</ul>
				</div><!-- ./widget -->
			</div><!-- /.row -->
		</div><!-- /.widgets -->
	</div><!-- /.container -->
	<div class="copyright text-center">
		<p>
			© Copyright 2016-2020. All Rights Reserved.
			<br>
			Created by
			<a href="https://hussam3bd.com" class="effect">
				Hussam Abd
			</a>
		</p>
	</div>
</footer><!-- /.footer -->

<!-- open/close -->
<div class="overlay overlay-simplegenie">
	<i class="overlay-close bx bx-x"></i>
	<div class="container">
		<div class="row text-center position-relative">
			<div class="col-lg-7 m-auto col-height-center search-form">
				<form action="#!" method="POST" class="inputs-bg" id="searchform">
					<label>
						<strong>Type a sentence or word you want to search for, And press Enter.</strong>
						<input type="text" name="q" class="form-control" placeholder="Search..">
					</label>
				</form>
			</div>
		</div>
	</div>
</div><!-- /.overlay -->

@endsection
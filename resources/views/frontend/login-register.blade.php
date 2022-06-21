
@extends('layouts.app')
@section('content')
<div class="page-wrapper">
	<section class="section" id="page-login">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="box">
						<h2 class="mb-4">Login</h2>
						<form action="#!" method="POST" class="login-form inputs-border inputs-bg">
							<div class="form-group">
								<div class="required">
									<input type="text" class="form-control" placeholder="Username or email">
								</div>
							</div>
							<div class="form-group">
								<div class="required">
									<input type="password" class="form-control" placeholder="Password">
								</div>
							</div>
							<div class="form-group d-flex align-items-center justify-content-between">
								<div>
									<input type="checkbox" id="rememberme">
									<label for="rememberme" class="checkbox">Remember me</label>
								</div>
								<a href="#!" class="effect float-right">Forgot your password?</a>
							</div>
							<div class="form-group text-right">
								<button type="button" class="btn btn-primary">Login</button>
							</div>
						</form>
					</div><!-- /.box -->
				</div>

				<div class="col-sm-6">
					<div class="box">
						<h2 class="mb-4">Register</h2>
						<form action="#!" method="POST" class="register-form inputs-border inputs-bg">
							<div class="form-group">
								<div class="required">
									<input type="text" class="form-control" placeholder="Username">
								</div>
							</div>
							<div class="form-group">
								<div class="required">
									<input type="email" class="form-control" placeholder="Email address">
								</div>
							</div>
							<div class="form-group">
								<div class="required">
									<input type="password" class="form-control" placeholder="Password">
								</div>
							</div>
							<div class="form-group text-right">
								<button type="button" class="btn btn-primary">Register</button>
							</div>
						</form>
					</div><!-- /.box -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-login -->
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

<!-- Go to top -->
@endsection
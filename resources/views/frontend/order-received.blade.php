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
					<a href="checkout.html">Checkout</a>
				</li>
				<li class="breadcrumb-item active">Order Received</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-order-received">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="alert alert-primary">Thank you, Your order has been received.</div>
					<ul class="order-details">
						<li class="order">
							Order Number: <strong>963</strong>
						</li>
						<li class="date">
							Date: <strong>March 25, 2016</strong>
						</li>
						<li class="total">
							Total: <strong><span class="amount">$499.00</span></strong>
						</li>
						<li class="method">
							Payment Method: <strong>Cheque Payment</strong>
						</li>
					</ul><!-- /.order-details -->

					<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
					<div class="box table-responsive">
						<h3 class="title">Order Details</h3>
						<table class="table cart-table order-details-table">
							<thead>
							<tr>
								<th class="product-name">Product</th>
								<th class="product-total">Total</th>
							</tr>
							</thead>
							<tbody>
							<tr class="item">
								<td class="product-name">
									<a href="product.html">Patterned Scarf</a> <strong class="product-quantity">× 1</strong></td>
								<td class="product-total">
									<span class="amount">$90.00</span>
								</td>
							</tr>
							<tr class="item">
								<td class="product-name">
									<a href="product.html">Bag Maroon</a> <strong class="product-quantity">× 1</strong>
									<table class="variation">
										<tbody>
										<tr>
											<th class="variation-size">Size:</th>
											<td class="variation-size">
												<p>Large</p>
											</td>
										</tr>
										</tbody>
									</table>
								</td>
								<td class="product-total">
									<span class="amount">$450.00</span>
								</td>
							</tr>
							</tbody>
							<tfoot>
							<tr>
								<th scope="row">Subtotal:</th>
								<td><span class="amount">$540.00</span></td>
							</tr>
							<tr>
								<th scope="row">Shipping:</th>
								<td>Free Shipping</td>
							</tr>
							<tr>
								<th scope="row">Payment Method:</th>
								<td>Cheque Payment</td>
							</tr>
							<tr>
								<th scope="row">Total:</th>
								<td><span class="amount">$540.00</span></td>
							</tr>
							</tfoot>
						</table>
					</div><!-- /.box -->
					<div class="text-right">
						<a href="index.html" class="btn btn-primary">Go Back</a>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-order-received -->
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
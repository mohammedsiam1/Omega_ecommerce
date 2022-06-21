@extends('layouts.app')
@section('content')

<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="{{route('frontend.index')}}">Home</a>
				</li>
				<li class="breadcrumb-item active">Contact Us</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="contact-info">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h3 class="pt-0">Why not say <span class="autotype">Hello</span><span class="typed-cursor">?</span></h3>
					<p class="description">
						Speak to our team if you have any questions, need advice or if you're curious to hear more about what we
						have to offer. Give us a call or send us an email.
					</p>

					<div>
						<p><strong>Phone:</strong> +90 555 888 111</p>
						<p><strong>Email:</strong> info@domain.com</p>
						<p><strong>Address:</strong> Avcılar NO:9 DAİRE :2, Istanbul, Turkey</p>
					</div>
				</div>
				<div class="col-lg-8">
					<form action="#!" method="POST" class="inputs-border">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Name" name="name">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Email Address" name="email">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" placeholder="Message"></textarea>
						</div>
						<div class="form-group text-right">
							<button type="button" class="btn btn-primary">Send Message</button>
						</div>
					</form>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
</div><!-- /.page-wrapper -->
@endsection
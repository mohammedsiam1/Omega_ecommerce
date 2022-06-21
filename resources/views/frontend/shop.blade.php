@extends('layouts.app')
@section('content')

<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">shop</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<livewire:frontend.shop-products-component/>
@endsection
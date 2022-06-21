@extends('layouts.app')
@section('content')

<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="{{route('frontend.index')}}">Home</a>
				</li>
				<li class="breadcrumb-item active">Shopping Cart</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-cart">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table cart-table" cellspacing="0">
							<thead>
							<tr>
								<th class="product-remove"></th>
								<th class="product-thumbnail"></th>
								<th class="product-name">Product</th>
								<th class="product-price">Price</th>
								<th class="product-quantity">Quantity</th>
								<th class="product-subtotal">Total Price</th>
							</tr>
							</thead>
							<tbody>
							@forelse(Cart::content() as $item)
							<livewire:frontend.cart-item-component :item="$item->rowId" :key="$item->rowId"/>
							@empty
							
								No Items Yet.
							
							@endforelse


							<livewire:frontend.cart-total-component/>
							</tbody>
						</table>
					</div><!-- /.table-responsive -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-cart -->
</div><!-- /.page-wrapper -->
@endsection
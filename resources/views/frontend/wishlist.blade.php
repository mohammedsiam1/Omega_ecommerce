@extends('layouts.app')
@section('content')
<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">Wishlist</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-wishlist">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="table-responsive">
						<table class="table cart-table wishlist-table" cellspacing="0">
							<thead>
								<tr>
									<th class="product-remove"></th>
									<th class="product-thumbnail"></th>
									<th class="product-name">Product</th>
									<th class="product-price">Unit Price</th>

									<th class="product-add-to-cart" colspan="1"></th>
								</tr>
							</thead>
							<tbody>

								@forelse(Cart::instance('wishlist')->content() as $item)
								<livewire:frontend.wish-list-item-component :item="$item->rowId" :key="$item->rowId" />
								@empty
								@endforelse
								<!-- <tr><td colspan="6"></td></tr> -->
							</tbody>
						</table>
					</div><!-- /.table-responsive -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /#wishlist -->
</div><!-- /.page-wrapper -->

@endsection
<tr>
	<td colspan="6" class="actions">
		<div class="row">


			<div class="cart-collaterals col-lg-5 offset-lg-2">
				<div class="cart-totals">
					<h2>Cart Totals</h2>
					<table class="table table-condensed" cellspacing="0">
						<tbody>
							<tr class="cart-subtotal">
								<th>Subtotal</th>
								<td class="text-right">
									<span class="amount">${{$cart_subtotal}}</span>
								</td>
							</tr>
							<tr class="shipping">
								<th>Tax</th>
								<td class="text-right">
									<span class="amount">${{$cart_tax}}</span>
								</td>
							</tr>
							<tr class="order-total">
								<th>Total</th>
								<td class="text-right">
									<strong><span class="amount">${{$cart_total}}</span></strong>
								</td>
							</tr>
						</tbody>
					</table>

					<div class="form-group clearfix d-flex align-items-center justify-content-between">
						<div class="mr-auto">
							<a href="{{route('frontend.cart')}}" class="btn btn-primary">Update Cart</a>
						</div>
						@if (Cart::instance('default')->count() > 0)
						<div class="ml-auto">
							<a href="{{route('frontend.checkout')}}" class="btn btn-primary">Checkout</a>
						</div>
						@endif
					</div>




				</div>
			</div>
		</div>
	</td>
</tr>
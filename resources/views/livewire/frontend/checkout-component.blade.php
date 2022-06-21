<div class="container">
	<div class="row">

		<div class="col-sm-6" wire:ignore>
			<div class="alert alert-info">
				<strong>Have a coupon?</strong>
				<a href="#!" class="effect" data-slide-toggle=".checkout-coupon-form">
					Click here to enter your code
				</a>
			</div>

			<div class="checkout-coupon-form box" style="display: none;">
				<form wire:submit.prevent="applyDiscount()" class="coupon-form inputs-border inputs-bg">
					@if (!session()->has('coupon'))
					<div class="form-group">
						<label for="coupon_code">Coupon code</label>
						<input type="text" wire:model="coupon_code" id="coupon_code" class="form-control" placeholder="Coupon code">
					</div>
					@endif
					@if(session()->has('coupon'))
					<div class="form-group text-right">
						<button type="button" wire:click.prevent="removeCoupon()" class="btn btn-danger">Remove Coupon</button>
					</div>
					@else
					<div class="form-group text-right">
						<button type="submit" class="btn btn-primary">Apply Coupon</button>
					</div>
					@endif
				</form>
			</div><!-- /.checkout-login-form -->
		</div>
	</div><!-- /.row -->

	<h2 class="h5 text-uppercase mb-4">Sipping addresses</h2>
        <div class="row">
            @forelse($addresses as $address)
                <div class="col-6 form-group">
                    <div class="custom-control custom-radio">
                        <input
                            type="radio"
                            id="address-{{ $address->id }}"
                            class="custom-control-input"
                            wire:model="customer_address_id"
                            wire:click="updateShippingCompanies()"
                            {{ intval($customer_address_id) == $address->id ? 'checked' : '' }}
                            value="{{ $address->id }}">
                        <label for="address-{{ $address->id }}" class="custom-control-label text-small">
                            <b>{{ $address->address_title }}</b>
                            <small>
                                {{ $address->address }}<br>
                                {{ $address->country->name }} - {{ $address->state->name }} - {{ $address->city->name }}
                            </small>
                        </label>
                    </div>
                </div>

            @empty
                <p>No addresses found</p>
                <a href="#">Add an address</a>
            @endforelse
        </div>
		@if ($customer_address_id != 0)
            <h2 class="h5 text-uppercase mb-4">Sipping way</h2>
            <div class="row">
                @forelse($shipping_companies as $shipping_company)
                    <div class="col-6 form-group">
                        <div class="custom-control custom-radio">
                            <input
                                type="radio"
                                id="shipping-company-{{ $shipping_company->id }}"
                                class="custom-control-input"
                                wire:model="shipping_company_id"
                                wire:click="updateShippingCost()"
                                {{ intval($shipping_company_id) == $shipping_company->id ? 'checked' : '' }}
                                value="{{ $shipping_company->id }}">
                            <label for="shipping-company-{{ $shipping_company->id }}" class="custom-control-label text-small">
                                <b>{{ $shipping_company->name }}</b>
                                <small>
                                    {{ $address->description }} - (${{ $shipping_company->cost }})
                                </small>
                            </label>
                        </div>
                    </div>

                @empty
                    <p>No shipping companies found</p>
                @endforelse
            </div>
        @endif
		@if ($customer_address_id != 0 && $shipping_company_id != 0)
            <h2 class="h5 text-uppercase mb-4">Payment way</h2>
            <div class="row">
                @forelse($payment_methods as $payment_method)
                    <div class="col-6 form-group">
                        <div class="custom-control custom-radio">
                            <input
                                type="radio"
                                id="payment-method-{{ $payment_method->id }}"
                                class="custom-control-input"
                                wire:model="payment_method_id"
                                wire:click="updatePaymentMethod()"
                                {{ intval($payment_method_id) == $payment_method->id ? 'checked' : '' }}
                                value="{{ $payment_method->id }}">
                            <label for="payment-method-{{ $payment_method->id }}" class="custom-control-label text-small">
                                <b>{{ $payment_method->name }}</b>
                            </label>
                        </div>
                    </div>
                @empty
                    <p>No payment way found</p>
                @endforelse
            </div>
        @endif

		@if ($customer_address_id != 0 && $shipping_company_id != 0 && $payment_method_id != 0)
            @if (\Str::lower($payment_method_code) == 'ppex')
			
                <form action="{{route('checkout.payment')}}" method="post">
                    @csrf
                    <input type="hidden" name="customer_address_id" value="{{ old('customer_address_id', $customer_address_id) }}" class="form-control">
                    <input type="hidden" name="shipping_company_id" value="{{ old('shipping_company_id', $shipping_company_id) }}" class="form-control">
                    <input type="hidden" name="payment_method_id" value="{{ old('payment_method_id', $payment_method_id) }}" class="form-control">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Continue to checkout with PayPal
                    </button>
					<br>
                </form>
            @endif
        @endif
	<form action="#!" method="POST" class="row checkout-form inputs-border inputs-bg">
		<div class="col-md-6">
			<div class="billing-field">
				<h3 class="title">Billing Details</h3>

				<div class="row">
					<div class="form-group col-sm-6">
						<div class="required">
							<input type="text" class="form-control" placeholder="First Name" required>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<div class="required">
							<input type="text" class="form-control" placeholder="Last Name" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Company Name">
				</div>

				<div class="row">
					<div class="form-group col-sm-6">
						<div class="required">
							<input type="email" class="form-control" placeholder="Email Address" required>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<div class="required">
							<input type="tel" class="form-control" placeholder="Phone" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="required">
						<select class="form-control">
							<option>Select a Country..</option>
							<option value="SY">Syria</option>
							<option value="UK">United Kingdom</option>
							<option value="US">United States</option>
							<option value="TR">Turkey</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-6">
						<div class="required">
							<input type="text" class="form-control" placeholder="Address" required>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<input type="text" class="form-control" placeholder="Address 2">
					</div>
				</div>

				<div class="form-group">
					<div class="required">
						<input type="text" class="form-control" placeholder="Postcode / ZIP" required>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-6">
						<div class="required">
							<input type="text" class="form-control" placeholder="Town / City" required>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<div class="required">
							<select class="form-control">
								<option>Select a Province..</option>
								<option value="SY">Syria</option>
								<option value="UK">United Kingdom</option>
								<option value="US">United States</option>
								<option value="TR">Turkey</option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<input type="checkbox" id="create_account">
					<label for="create_account" class="checkbox" data-slide-toggle=".create-account">Create an
						account?</label>
					<div class="create-account box" style="display: none;">
						<p>
							Create an account by entering the information below. If you are a returning customer please
							login
							at
							the top of the page.
						</p>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Account Password">
						</div>
					</div><!-- /.create-account -->
				</div>

				<div class="form-group">
					<h3>
						<input type="checkbox" id="ship-different-address">
						<label for="ship-different-address" class="checkbox" data-slide-toggle=".different-address">Ship
							to
							a
							different address?</label>
					</h3>
					<div class="different-address box" style="display: none;">
						<div class="row">
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="text" class="form-control" placeholder="First Name" required>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="text" class="form-control" placeholder="Last Name" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<input type="text" class="form-control" placeholder="Company Name">
						</div>

						<div class="form-group">
							<div class="required">
								<select class="form-control">
									<option>Select a Country..</option>
									<option value="SY">Syria</option>
									<option value="UK">United Kingdom</option>
									<option value="US">United States</option>
									<option value="TR">Turkey</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="text" class="form-control" placeholder="Address" required>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<input type="text" class="form-control" placeholder="Address 2">
							</div>
						</div>

						<div class="form-group">
							<div class="required">
								<input type="text" class="form-control" placeholder="Postcode / ZIP" required>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="text" class="form-control" placeholder="Town / City" required>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<div class="required">
									<select class="form-control">
										<option>Select a Province..</option>
										<option value="SY">Syria</option>
										<option value="UK">United Kingdom</option>
										<option value="US">United States</option>
										<option value="TR">Turkey</option>
									</select>
								</div>
							</div>
						</div>
						
					</div><!-- /.create-account -->
				</div>

				<div class="form-group">
					<label>Order Notes</label>
					<textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." rows="5"></textarea>
				</div>
			</div><!-- /.billing-field -->
		</div>

		<div class="col-md-6">
			<div class="review-order">
				<div class="box">
					<h3 class="title">Your order</h3>
					<div class="table-responsive">
						<table class="table cart-table review-order-table">	
						@if(session()->has('coupon'))
							
								<tr class="cart-subtotal">
									<th colspan="2">Discount ({{ getNumbers()->get('discount_code') }})</th>
									<td><span class="amount">- ${{ $cart_discount }}</span></td>
								</tr>
							
							@endif					
								<tr class="cart-subtotal">
									<th colspan="2">Subtotal</th>
									<td><span class="amount">${{ $cart_subtotal }}</span></td>
								</tr>
								<tr class="cart-subtotal">
									<th colspan="2">Tax</th>
									<td><span class="amount">${{ $cart_tax }}</span></td>
								</tr>
							
								<tr class="cart-subtotal">
									<th colspan="2">Total</th>
									<td><span class="amount">${{ $cart_total }}</span></td>
								</tr>					
						</table><!-- /.review-order-table -->
					</div>					
					<h2>Payment Method</h2>
					<div id="payment" class="checkout-payment">
						<ul class="payment-methods">
							<li class="payment-method">
								<input id="payment_method_cheque" type="radio" name="payment_method" checked="checked">
								<label for="payment_method_cheque" class="radio" data-slide-toggle="#payment-cheque" data-parent=".payment-methods">Cheque Payment</label>

								<div class="payment-box" id="payment-cheque">
									<p>
										Please send your cheque to Store Name, Store Street, Store Town, Store State / County,
										Store Postcode.
									</p>
								</div>
							</li>
							<li class="payment-method">
								<input id="payment_method_cod" type="radio" name="payment_method">
								<label for="payment_method_cod" class="radio" data-slide-toggle="#payment-cash" data-parent=".payment-methods">Cash on Delivery</label>

								<div class="payment-box" id="payment-cash" style="display:none;">
									<p>Pay with cash upon delivery.</p>
								</div>
							</li>
							<li class="payment-method">
								<input id="payment_method_paypal" type="radio" name="payment_method">
								<label for="payment_method_paypal" class="radio" data-slide-toggle="#payment-paypal" data-parent=".payment-methods">PayPal</label>

								<div class="payment-box" id="payment-paypal" style="display:none;">
									<img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" class="img-fluid" alt="">
									<p><a href="#!" class="effect">What is PayPal?</a></p>
									<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
								</div>
							</li>
						</ul>
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Place order</button>
						</div>
					</div>
				</div><!-- /.box -->
			</div><!-- /.review-order -->
		</div>

	</form><!-- /.checkout-form -->
</div>
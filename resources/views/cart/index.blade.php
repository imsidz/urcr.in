@extends('layouts.app')

@section('content')
<div class="banner-slider banner-cart-slider bg-slider">
        <div class="wrap-item" data-pagination="false" data-itemscustom="[[0,1]]">
            <div class="item-slider">
                <div class="banner-thumb"><a href="#"><img src="images/pages/banner.jpg" alt="" /></a></div>
            </div>
        </div>
    </div>
    <!-- End Banner Slider -->
    <div class="bread-crumb">
        <div class="container">
            <a href="#">Home</a> <a href="#">Shop</a> <span>Cart</span>
        </div>
    </div>
    <div class="content-pages">
			<div class="container">
				<div class="content-about content-cart-page woocommerce">
					<h2 class="title30 mont-font">Cart</h2>
					<form method="POST" action="#">
						<div class="table-responsive">
							<table cellspacing="0" class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									@foreach (Cart::getContent() as $cart)
										<tr class="cart_item">
											<td class="product-remove">
												<a class="remove" href="#"><i class="fa fa-times"></i></a>
											</td>
											<td class="product-thumbnail">
												<a href="#"><img  src="{{ $cart->attributes->image }}" alt=""/></a>					
											</td>
											<td class="product-name" data-title="Product">
												<a href="#">{{ $cart->name }} </a>					
											</td>
											<td class="product-price" data-title="Price">
												<span class="amount">Rs. {{ $cart->price }}</span>					
											</td>
											<td class="product-quantity" data-title="Quantity">
												<div class="detail-qty">
													<a href="#" class="qty-down"><i class="fa fa-angle-left"></i></a>
													<span class="qty-val">{{ $cart->quantity }}</span>
													<a href="#" class="qty-up"><i class="fa fa-angle-right"></i></a>
												</div>			
											</td>
											<td class="product-subtotal" data-title="Total">
												<span class="amount">Rs. {{ $cart->price }}</span>					
											</td>
										</tr>
									@endforeach
									
									
									<tr>
										<td class="actions" colspan="6">
											<div class="coupon">
												<label for="coupon_code">Coupon:</label> 
												<input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> 
												<input type="submit" value="Apply Coupon" name="apply_coupon" class="button bg-color">
											</div>
											<input type="submit" value="Update Cart" name="update_cart" class="button bg-color">			
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
					<div class="cart-collaterals">
						<div class="cart_totals ">
							<h2>Cart Totals</h2>
							<div class="table-responsive">
								<table cellspacing="0" class="table">
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><strong class="amount">Rs. {{ Cart::getSubTotal() }}</strong></td>
										</tr>
										{{-- <tr class="shipping">
											<th>Shipping</th>
											<td>
												<ul class="list-none" id="shipping_method">
													<li>
														<input type="radio" class="shipping_method" checked="checked" value="free_shipping" id="shipping_method_0_free_shipping" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_free_shipping">Free Shipping</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_delivery" id="shipping_method_0_local_delivery" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_delivery">Local Delivery (Free)</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_pickup" id="shipping_method_0_local_pickup" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_pickup">Local Pickup (Free)</label>
													</li>
												</ul>
											</td>
										</tr> --}}
										<tr class="order-total">
											<th>Total</th>
											<td><strong><span class="amount">Rs. {{ Cart::getTotal() }}</span></strong> </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="wc-proceed-to-checkout">
								<a class="checkout-button button alt wc-forward bg-color" href="/checkout">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- End Content Pages -->
@endsection
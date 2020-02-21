@extends('layouts.app')

@section('content')
<div class="banner-slider banner-cart-slider bg-slider">
    <div class="wrap-item" data-pagination="false" data-itemscustom="[[0,1]]">
        <div class="item-slider">
            <div class="banner-thumb"><a href="#"><img src="/images/pages/banner.png" alt="" /></a></div>
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
                                <form action="/cart/product/{{ $cart->id }}/delete" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        X
                                    </button>
                                </form>
                            </td>
                            <td class="product-thumbnail">
                                <a href="#"><img src="{{ $cart->attributes->image }}" alt="" /></a>
                            </td>
                            <td class="product-name" data-title="Product">
                                <a href="#">{{ $cart->name }} | {{ $cart->attributes->size }} |
                                    {{ $cart->attributes->color }} </a>
                            </td>
                            <td class="product-price" data-title="Price">
                                <span class="amount">₹{{ $cart->price }}</span>
                            </td>
                            <td class="product-quantity" data-title="Quantity">
                                <form action="/cart/product/{{ $cart->id }}/qty" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <select name="qty" id="" class="form-control">
                                        <option value="1" @if($cart->quantity == 1) selected @endif>1</option>
                                        <option value="2" @if($cart->quantity == 2) selected @endif>2</option>
                                        <option value="3" @if($cart->quantity == 3) selected @endif>3</option>
                                        <option value="4" @if($cart->quantity == 4) selected @endif>4</option>
                                        <option value="5" @if($cart->quantity == 5) selected @endif>5</option>
                                        <option value="6" @if($cart->quantity == 6) selected @endif>6</option>
                                        <option value="7" @if($cart->quantity == 7) selected @endif>7</option>
                                        <option value="8" @if($cart->quantity == 8) selected @endif>8</option>
                                        <option value="9" @if($cart->quantity == 9) selected @endif>9</option>
                                        <option value="10" @if($cart->quantity == 10) selected @endif>10</option>
                                    </select>
                                    <button type="submit" class="btn btn-warning btn-sm form-control">Update</button>
                                </form>
                            </td>
                            <td class="product-subtotal" data-title="Total">
                                <span class="amount">₹{{ $cart->price * $cart->quantity }}</span>
                            </td>
                        </tr>
                        @endforeach


                        <tr>
                            <td class="actions" colspan="6">
                                <div class="coupon">
                                    <label for="coupon_code">Coupon:</label>
                                    <input type="te`t" placeholder="Coupon code" value="" id="coupon_code"
                                        class="input-text" name="coupon_code">
                                    <input type="submit" value="Apply Coupon" name="apply_coupon"
                                        class="button bg-color">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart-collaterals">
                <div class="cart_totals ">
                    <h2>Cart Totals</h2>
                    <div class="table-responsive">
                        <table cellspacing="0" class="table">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><strong class="amount">₹{{ Cart::getSubTotal() }}</strong></td>
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
                                    <td><strong><span class="amount">₹{{ Cart::getTotal() }}</span></strong> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="wc-proceed-to-checkout">
                        <a class="checkout-button button alt wc-forward bg-color" href="/checkout">Proceed to
                            Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content Pages -->
@endsection

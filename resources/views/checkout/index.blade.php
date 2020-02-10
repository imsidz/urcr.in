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
    <!-- End Bread Crumb -->
    <div class="content-pages">
        <div class="container">
            <div class="content-about content-checkout-page woocommerce">
                <h2 class="title30 mont-font text-center">Checkout</h2>
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-ms-12">
                                <div class="check-billing">
                                    <form class="form-my-account" action="/checkout" method="POST">
                                        @csrf
                                        <h2 class="title title18">Billing Details</h2>
                                        <p class="clearfix box-col1">
                                            <input type="text" name="fname" value="" placeholder="Full Name" />
                                            @error('fname')
                                               <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </p>
                                        <p class="clearfix box-col1">
                                            <input type="text" name="mobile" value="" placeholder="Mobile *" />
                                            @error('mobile')
                                               <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </p>
                                        <p>
                                            <select name="country" id="country">
                                                <option disabled selected>Country*</option>
                                                <option value="india">India</option>
                                            </select>
                                            @error('country')
                                               <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </p>
                                        <p><input type="text" name="address" value="" placeholder="Address *"  />
                                            @error('address')
                                               <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </p>
                                        <p class="clearfix box-col2">
                                            <input type="text" name="city" value="" placeholder="City *" />
                                            <input type="text" name="state" value="" placeholder="State *" />
                                        </p>
                                        <p class="clearfix box-col1">
                                            <input type="text" name="pincode" value="" placeholder="Postcode / Zip" />
                                        </p>
                                        <p>
                                            <input type="checkbox" name="save" id="remember"/> <label for="remember">Save this address for future</label>
                                        </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-ms-12">
                                <div class="check-address">
                                    <div class="form-my-account">
                                        
                                        <p>
                                            <textarea name="notes" cols="30" rows="10" placeholder="Order Notes"></textarea>
                                        </p>
                                    </div>
                                </div>		
                            </div>
                        </div>
                        <h3 class="order_review_heading bg-color">Your order</h3>
                        <div class="woocommerce-checkout-review-order" id="order_review">
                            <div class="table-responsive">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::getContent() as $cart)
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{ $cart->name }}&nbsp; <span class="product-quantity">× {{ $cart->quantity }}</span>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">Rs {{ $cart->price }}</span>						
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                        <td><strong class="amount">Rs {{ Cart::getSubTotal() }}</strong></td>
                                        </tr>
                                       
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="amount">Rs {{ Cart::getTotal() }}</span></strong> </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="woocommerce-checkout-payment" id="payment">
                                <ul class="payment_methods methods list-none">
                                    {{-- <li class="payment_method_bacs">
                                        <input type="radio" data-order_button_text="" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs" checked="checked">
                                        <label for="payment_method_bacs">Direct Bank Transfer 	</label>
                                        <div style="" class="payment_box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </li>
                                    <li class="payment_method_cheque">
                                        <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                        <label for="payment_method_cheque">Cheque Payment 	</label>
                                            <div style="display:none;" class="payment_box payment_method_cheque">
                                            <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </li> --}}
                                    <li class="payment_method_cod">
                                        <input type="radio" data-order_button_text="" checked value="cod" name="payment_method" class="input-radio" id="payment_method_cod" aria-selected="true">
                                        <label for="payment_method_cod">Cash on Delivery 	</label>
                                        <div style="display:none;" class="payment_box payment_method_cod">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </li>
                                    
                                </ul>
                                <div class="form-row place-order">
                                    <input type="submit" data-value="Place order" value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt bg-color">
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </div>
    <!-- End Content Pages -->
@endsection
<div class="mini-cart-box pull-right">
        <a class="mini-cart-link" href="/cart">
            <span class="mini-cart-icon color"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
            <span class="mini-cart-number"><span class="color">My Cart:</span><strong>{{ Cart::getContent()->count() }} items: ₹{{ Cart::getTotal() }}</strong></span>
        </a>
        <div class="mini-cart-content">
            <h2 class="mont-font title18 color">({{ Cart::getContent()->count() }}) ITEMS IN MY CART</h2>
            <div class="list-mini-cart-item">
                @foreach (Cart::getContent() as $cart)
                <div class="productmini-cat table">
                    <div class="product-thumb">
                        <a href="#" class="product-thumb-link"><img alt="" src="{{ $cart->attributes['image']}}"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">{{ $cart->name }}</a></h3>
                        <div class="product-price">
                            <ins><span>₹{{ $cart->price }}</span></ins>
                        </div>
                        <div class="product-rate">
                            <div class="product-rating" style="width:100%"></div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                {{-- <div class="productmini-cat table">
                    <div class="product-thumb">
                        <a href="#" class="product-thumb-link"><img alt="" src="/images/photos/topshop_product_02.jpg"></a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                        <div class="product-price">
                            <ins><span>$400.00</span></ins>
                            <del><span>$520.00</span></del>
                        </div>
                        <div class="product-rate">
                            <div class="product-rating" style="width:100%"></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="mini-cart-total mont-font  clearfix">
                <strong class="pull-left">TOTAL</strong>
                <span class="pull-right color">₹{{ Cart::getTotal() }}</span>
            </div>
            <div class="mini-cart-button clearfix">
                <a class="mini-cart-view shop-button pull-left" href="/cart">View my cart </a>
                <a class="mini-cart-checkout shop-button pull-right" href="/checkout">Checkout</a>
            </div>
        </div>
    </div>
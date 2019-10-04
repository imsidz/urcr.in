@extends('layouts.app')

@section('content')
<div class="banner-slider banner-slider1 bg-slider">
<div class="wrap-item" data-pagination="true" data-autoplay="true" data-transition="fade" data-navigation="false" data-itemscustom="[[0,1]]">
    <div class="item-slider">
        <div class="banner-thumb"><a href="#"><img src="images/home/slide1-1.jpg" alt="" /></a></div>
        <div class="banner-info">
            <div class="container">
                <div class="banner-content-text white text-center">
                    <h2 class="banner-title vibes-font animated" data-animated="flash">New Arrivals</h2>
                    <a href="#" class="banner-button bg-color animated" data-animated="bounceIn"><span>Shop Now</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="item-slider">
        <div class="banner-thumb"><a href="#"><img src="images/home/slide1-2.jpg" alt="" /></a></div>
        <div class="banner-info">
            <div class="container">
                <div class="banner-content-text white text-center">
                    <h2 class="banner-title vibes-font animated" data-animated="flash"><span class="color">-60%</span>Off</h2>
                    <a href="#" class="banner-button bg-color animated" data-animated="bounceIn"><span>Shop Now</span></a>
                </div>
            </div>
        </div>
    </div><div class="item-slider">
        <div class="banner-thumb"><a href="#"><img src="images/home/slide1-3.jpg" alt="" /></a></div>
        <div class="banner-info">
            <div class="container">
                <div class="banner-content-text white text-center">
                    <h2 class="banner-title vibes-font animated" data-animated="flash">Collection</h2>
                    <a href="#" class="banner-button bg-color animated" data-animated="bounceIn"><span>Shop Now</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="popular-category">
        <div class="container">
            <div class="title-box text-uppercase text-center">
                <strong class="first-letter vibes-font">p</strong>
                <span class="color">01</span>
                <h2 class="title30 mont-font inline-block">Popular <strong class="hot-label"><span>Hot</span></strong></h2>
                <h2 class="title30 mont-font">catrgories</h2>
            </div>
            <div class="popcat-slider">
                <div class="wrap-item" data-pagination="false" data-navigation="false" data-itemscustom="[[0,1],[560,2],[768,3]]">
                    @foreach ($subcategories as $sub)
                        <div class="popcat-item text-center">
                            <h3 class="mont-font title18 underline-title"><a href="#">{{ $sub->name }}</a></h3>
                            <div class="popcat-thumb"><a href="#"><img src="{{ $sub->image }}" alt="" /></a></div>
                        </div>
                    @endforeach
                    
                    {{-- <div class="popcat-item text-center">
                        <h3 class="mont-font title18 underline-title"><a href="#">Cosmetics</a></h3>
                        <div class="popcat-thumb"><a href="#"><img src="images/photos/home1/topshop_cosmetics.png" alt="" /></a></div>
                    </div>
                    <div class="popcat-item text-center">
                        <h3 class="mont-font title18 underline-title"><a href="#">Gift shop</a></h3>
                        <div class="popcat-thumb"><a href="#"><img src="images/photos/home1/topshop_gift.png" alt="" /></a></div>
                    </div>
                    <div class="popcat-item text-center">
                        <h3 class="mont-font title18 underline-title"><a href="#">Shop Cup</a></h3>
                        <div class="popcat-thumb"><a href="#"><img src="images/photos/home1/topshop_food.png" alt="" /></a></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- End Popular Category -->
		<div class="view-collection">
                <div class="container">
                    <div class="title-box text-uppercase text-center wow zoomIn">
                        <strong class="first-letter vibes-font">v</strong>
                        <span class="color">02</span>
                        <h2 class="title30 mont-font inline-block">view</h2>
                        <h2 class="title30 mont-font">Collection</h2>
                    </div>
                    <div class="list-collection">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                @foreach ($collection1 as $col1)
                                    <div class="item-collection text-center wow fadeInLeft">
                                        <div class="banner-adv zoom-rotate overlay-image">
                                            <a href="#" class="adv-thumb-link"><img src="{{ $col1->photos->first()['link'] }}" alt=""></a>
                                        </div>
                                        <h3 class="mont-font title18 underline-title"><a href="#">{{ $col1->title }}</a></h3>
                                        {{-- <h2 class="vibes-font">Lorem ipsum dolor sit amet</h2> --}}
                                        <a href="/product/{{ $col1->slug }}" class="shop-button">Shop Now</a>
                                    </div>
                                @endforeach
                                {{-- <div class="item-collection text-center wow fadeInLeft">
                                    <div class="banner-adv zoom-rotate overlay-image">
                                        <a href="#" class="adv-thumb-link"><img src="images/photos/collection/collection_01.jpg" alt=""></a>
                                    </div>
                                    <h3 class="mont-font title18 underline-title"><a href="#">Devices</a></h3>
                                    <h2 class="vibes-font">Lorem ipsum dolor sit amet</h2>
                                    <a href="#" class="shop-button">Shop Now</a>
                                </div> --}}
                                @foreach ($collection2 as $col2)
                                    <div class="item-collection text-center wow fadeInLeft">
                                        <div class="banner-adv zoom-rotate overlay-image">
                                            <a href="#" class="adv-thumb-link"><img src="{{ $col2->photos->first()['link'] }}" alt=""></a>
                                        </div>
                                        <h3 class="mont-font title18 underline-title"><a href="#">{{ $col2->title }}</a></h3>
                                        <h2 class="vibes-font">Lorem ipsum dolor sit amet</h2>
                                        <a href="#" class="shop-button">Shop Now</a>
                                    </div>
                                @endforeach
                                
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="intro-collection wow fadeInRight">
                                    <p>Praesent vestibu lum molestie lacus. Aenean nonummyendre rit mauris. Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer adipi scing elit.</p>
                                    <div class="text-center">
                                        <a href="/products" class="viewall-button">View all Products <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="item-collection text-center wow fadeInRight">
                                    <div class="banner-adv zoom-rotate overlay-image">
                                        <a href="#" class="adv-thumb-link"><img src="images/photos/collection/collection_02.jpg" alt=""></a>
                                    </div>
                                    <h3 class="mont-font title18 underline-title"><a href="#">Flower cute</a></h3>
                                    <h2 class="vibes-font">Lorem ipsum dolor sit amet</h2>
                                    <a href="#" class="shop-button">Shop Now</a>
                                </div>
                                <div class="banner-collection banner-adv zoom-image fade-out-in  wow fadeInRight">
                                    <a href="#" class="adv-thumb-link"><img src="images/photos/collection/banner.jpg" alt=""></a>
                                    <div class="banner-info mont-font text-center">
                                        <h3 class="title30 color">view all of</h3>
                                        <h2 class="title60 white">top shop</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-product">
                    <div class="container">
                        <div class="title-box text-uppercase text-center">
                            <strong class="first-letter vibes-font">s</strong>
                            <span class="color">03</span>
                            <h2 class="title30 mont-font inline-block">show</h2>
                            <h2 class="title30 mont-font">products</h2>
                        </div>
                        <div class="tab-title text-center text-uppercase">
                            <ul class="list-none">
                                <li class="inline-block active"><a href="#bet" class="shop-button" data-toggle="tab">best sellers</a></li>
                                <li class="inline-block"><a href="#fea" class="shop-button" data-toggle="tab">Featured</a></li>
                                <li class="inline-block"><a href="#top" class="shop-button" data-toggle="tab">Top Review</a></li>
                                <li class="inline-block"><a href="#spe" class="shop-button" data-toggle="tab">Specails</a></li>
                                <li class="inline-block"><a href="#new" class="shop-button" data-toggle="tab">new arrivals</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="bet" class="tab-pane fade in active">
                                <div class="product-slider">
                                    <div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2]]">
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_28.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$480.00</span></del>
                                                                <span class="sale-label">-20<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_03.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$320.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_02.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-30<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_29.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_10.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_11.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_12.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_13.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab -->
                            <div id="fea" class="tab-pane fade in">
                                <div class="product-slider">
                                    <div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2]]">
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_20.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$480.00</span></del>
                                                                <span class="sale-label">-20<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_19.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$320.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_18.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-30<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_17.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_16.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_15.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_14.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_13.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab -->
                            <div id="top" class="tab-pane fade in">
                                <div class="product-slider">
                                    <div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2]]">
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_21.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$480.00</span></del>
                                                                <span class="sale-label">-20<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_22.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$320.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_23.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-30<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_24.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_25.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_26.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_27.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_28.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab -->
                            <div id="spe" class="tab-pane fade in">
                                <div class="product-slider">
                                    <div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2]]">
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_29.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$480.00</span></del>
                                                                <span class="sale-label">-20<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_30.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$320.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_31.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-30<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_32.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_33.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_34.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_35.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_36.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab -->
                            <div id="new" class="tab-pane fade in">
                                <div class="product-slider">
                                    <div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2]]">
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_37.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$480.00</span></del>
                                                                <span class="sale-label">-20<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_38.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$320.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_39.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-30<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_40.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_41.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_42.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item-product-gallery">
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_43.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$400.00</span></ins>
                                                                <del><span>$520.00</span></del>
                                                                <span class="sale-label">-15<sup>%</sup></span>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-thumb product-thumb-gallery">
                                                            <a href="#" class="product-thumb-link"><img src="images/photos/topshop_product_44.jpg" alt="" /></a>
                                                            <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                            <div class="thumb-gallery">
                                                                <a href="#"><img src="images/photos/topshop_product_04.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_05.jpg" alt="" /></a>
                                                                <a href="#"><img src="images/photos/topshop_product_06.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a href="#" class="shop-button">topshop Name Product</a></h3>
                                                            <div class="product-rate">
                                                                <div class="product-rating" style="width:100%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <ins><span>$198.00</span></ins>
                                                            </div>
                                                            <p class="desc">Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer </p>
                                                            <div class="product-extra-link">
                                                                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                                                <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                                                <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab -->
                        </div>
                        <div class="text-center">
                            <a href="#" class="viewall-button">View all Products <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- End Show Product -->
		<div class="client-say">
                <div class="container">
                    <div class="title-box text-uppercase text-center">
                        <strong class="first-letter vibes-font">w</strong>
                        <span class="color">04</span>
                        <h2 class="title30 mont-font inline-block">What</h2>
                        <h2 class="title30 mont-font">client say</h2>
                    </div>
                </div>
                <div class="slick-slider client-slider">
                    <div class="slick center">
                        <div class="item-client">
                            <div class="client-thumb">
                                <a href="#"><img src="images/home/av1.png" alt="" /></a>
                            </div>
                            <p class="desc">I did some search online for a place to get my nails done, and shortly afterwards I came across Naillepo. I guess it was destiny, because since my first visit I have always left their salon fully satisfied. Moreover, they have a wide set of additional services even for the most exquisite clients. </p>
                            <h3 class="title14 client-name"><a href="#">Fanbong Pham</a></h3>
                        </div>
                        <div class="item-client">
                            <div class="client-thumb">
                                <a href="#"><img src="images/home/av2.png" alt="" /></a>
                            </div>
                            <p class="desc">I did some search online for a place to get my nails done, and shortly afterwards I came across Naillepo. I guess it was destiny, because since my first visit I have always left their salon fully satisfied. Moreover, they have a wide set of additional services even for the most exquisite clients. </p>
                            <h3 class="title14 client-name"><a href="#">fananh si pham</a></h3>
                        </div>
                        <div class="item-client">
                            <div class="client-thumb">
                                <a href="#"><img src="images/home/av3.png" alt="" /></a>
                            </div>
                            <p class="desc">I did some search online for a place to get my nails done, and shortly afterwards I came across Naillepo. I guess it was destiny, because since my first visit I have always left their salon fully satisfied. Moreover, they have a wide set of additional services even for the most exquisite clients. </p>
                            <h3 class="title14 client-name"><a href="#">gia han si pham</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            
		<!-- End Client Say -->
		<div class="latest-news">
                <div class="container">
                    <div class="title-box text-uppercase text-center wow zoomIn">
                        <strong class="first-letter vibes-font">l</strong>
                        <span class="color">05</span>
                        <h2 class="title30 mont-font">Latest</h2>
                        <h2 class="title30 mont-font">News</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="latest-news-intro wow fadeInUp">Praesent vestibu lum molestie lacus. Aenean nonummyendre rit mauris. Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer adipi scing elit.</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="item-post-format wow fadeInUp">
                                        <div class="post-thumb">
                                            <a href="#" class="post-thumb-link"><img src="images/photos/blog/topshop_blog_01.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                            <div class="post-format"><a href="#">slide</a><span>3</span></div>
                                            <h3 class="title14 post-title"><a href="#">slide post fomat</a></h3>
                                            <div class="post-comment-date clearfix">
                                                <div class="post-date pull-left text-center">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <span>Fec. 08 2017</span>
                                                </div>
                                                <div class="post-comment pull-right text-center">
                                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                                    <span>04</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="item-post-format wow fadeInUp">
                                        <div class="post-thumb">
                                            <a href="#" class="post-thumb-link"><img src="images/photos/blog/topshop_blog_02.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                            <div class="post-format"><a href="#">video</a><span>1</span></div>
                                            <h3 class="title14 post-title"><a href="#">video post fomat</a></h3>
                                            <div class="post-comment-date clearfix">
                                                <div class="post-date pull-left text-center">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <span>Fec. 08 2017</span>
                                                </div>
                                                <div class="post-comment pull-right text-center">
                                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                                    <span>02</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="list-post-left">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-post-format wow fadeInUp">
                                            <div class="post-thumb">
                                                <a href="#" class="post-thumb-link"><img src="images/photos/blog/topshop_blog_03.jpg" alt="" /></a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-format"><a href="#">Gallery</a><span>2</span></div>
                                                <h3 class="title14 post-title"><a href="#">image fomat</a></h3>
                                                <div class="post-comment-date clearfix">
                                                    <div class="post-date pull-left text-center">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span>Fec. 08 2017</span>
                                                    </div>
                                                    <div class="post-comment pull-right text-center">
                                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                                        <span>01</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-post-format wow fadeInUp">
                                            <div class="post-thumb">
                                                <a href="#" class="post-thumb-link"><img src="images/photos/blog/topshop_blog_02.jpg" alt="" /></a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-format"><a href="#">image</a><span>7</span></div>
                                                <h3 class="title14 post-title"><a href="#">Image post fomat</a></h3>
                                                <div class="post-comment-date clearfix">
                                                    <div class="post-date pull-left text-center">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span>Fec. 08 2017</span>
                                                    </div>
                                                    <div class="post-comment pull-right text-center">
                                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                                        <span>03</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center wow fadeInLeft">
                                <a href="#" class="viewall-button">View all Blog <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
		<!-- End Latest News -->
		<div class="our-services">
                <div class="container">
                    <div class="title-box text-uppercase text-center">
                        <strong class="first-letter vibes-font">o</strong>
                        <span class="color">06</span>
                        <h2 class="title30 mont-font">Our</h2>
                        <h2 class="title30 mont-font">services</h2>
                    </div>
                    <div class="list-our-service">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-service bottom-right">
                                    <div class="service-icon">
                                        <a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="service-info text-center">	
                                        <h3 class="title14"><a href="#">FREE SHIPPING ON ALL ORDRES</a></h3>
                                        <p class="desc">Get Free Shipping on all orders over $75 and free returns to our UK returns centre! Items are dispatched from the US and will arrive in 5-8 days.</p>
                                        <a href="#" class="viewall-button">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-service bottom-left">
                                    <div class="service-icon">
                                        <a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="service-info text-center">	
                                        <h3 class="title14"><a href="#">FAQs</a></h3>
                                        <p class="desc">Lorem ipsum dolor sit amet consectetuer adipi scing elit. Praesent vestibu lum molestie lacus. Aenean nonummyendrerit mauris</p>
                                        <a href="#" class="viewall-button">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-service top-right">
                                    <div class="service-icon">
                                        <a href="#"><i class="fa fa-laptop" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="service-info text-center">	
                                        <h3 class="title14"><a href="#">AMAZING CUSTOMER SERVICE</a></h3>
                                        <p class="desc">Get Free Shipping on all orders over $75 and free returns to our UK returns centre! Items are dispatched from the US and will arrive in 5-8 days.</p>
                                        <a href="#" class="viewall-button">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-service top-left">
                                    <div class="service-icon">
                                        <a href="#"><i class="fa  fa-volume-control-phone" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="service-info text-center">	
                                        <h3 class="title14"><a href="#">Hot line</a></h3>
                                        <p class="desc">Lorem ipsum dolor sit amet consectetuer adipi scing elit. Praesent vestibu lum molestie lacus. Aenean nonummyendrerit mauris</p>
                                        <a href="#" class="viewall-button">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
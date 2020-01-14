@extends('layouts.app')

@section('content')
<style>
.p-img{
    height: 150px; width: 100%; overflow: hidden;
}
.p-img img{
    position: absolute; right: 0; bottom: 0;
}
</style>
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
    <div class="container-fluid">
        <div class="title-box text-uppercase text-center">
            <strong class="first-letter vibes-font">p</strong>
            <span class="color">01</span>
            <h2 class="title30 mont-font inline-block">Latest <strong class="hot-label"><span>Hot</span></strong></h2>
            <h2 class="title30 mont-font">Products</h2>
        </div>
        @foreach ($latests->chunk(6) as $chunk)
        <div class="row">
            @foreach ($chunk as $pro)
                
            
        <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="panel">

            
            <div class="item-product item-product-grid panel-default">
                <div class="product-thumb box-hover-dir p-img">
                <a href="/products/{{ $pro->slug }}">
                    <img src="{{ $pro->photos->first()['link'] }}" alt="">
                </a>
                    {{-- <div class="info-product-hover-dir">
                        <div class="inner-product-hover-dir">
                            <div class="content-product-hover-dir">
                                <a href="/products/{{ $product->slug }}" class="quickview-link fancybox.iframe">Quick view <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                <span class="product-total-sale">154</span>
                                <div class="product-extra-link">
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
                                    <a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
                                    <a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="product-info" style="padding:15px;">
                    <h3 class="product-title"><a href="/products/{{ $pro->slug }}">{{ $pro->title }}</a></h3>
                    <div class="product-rate">
                        <div class="product-rating" style="width:100%"></div>
                    </div>
                    <div class="product-price">
                        <ins><span>Rs {{ $pro->price }}</span></ins>
                        <del><span>Rs {{ $pro->mrp }}</span></del>
                        {{-- <span class="sale-label">-20<sup>%</sup></span> --}}
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endforeach
        </div>
        
        @endforeach
        
        
    </div>
    <center> <a href="/products" class="btn btn-primary">View All</a>
</div>
<div class="view-collection">
    <div class="container">
        <div class="title-box text-uppercase text-center wow zoomIn">
            <strong class="first-letter vibes-font">v</strong>
            <span class="color">02</span>
            <h2 class="title30 mont-font inline-block">Latest</h2>
            <h2 class="title30 mont-font">Offers</h2>
        </div>
        <div class="list-collection">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="item-collection text-center wow fadeInLeft">
                            <div class="banner-adv zoom-rotate overlay-image">
                                <a href="#" class="adv-thumb-link"><img src="https://miro.medium.com/max/800/1*y264sVVzkJh1Awhw4SOjAw.jpeg" alt="alt"></a>
                            </div>
                            <h3 class="mont-font title18 underline-title"><a href="#">20% Discount</a></h3>
                            {{-- <h2 class="vibes-font">Lorem ipsum dolor sit amet</h2> --}}
                            <a href="#" class="shop-button">Shop Now</a>
                        </div>
                    
                    {{-- <div class="item-collection text-center wow fadeInLeft">
                        <div class="banner-adv zoom-rotate overlay-image">
                            <a href="#" class="adv-thumb-link"><img src="images/photos/collection/collection_01.jpg" alt=""></a>
                        </div>
                        <h3 class="mont-font title18 underline-title"><a href="#">Devices</a></h3>
                        <h2 class="vibes-font">Lorem ipsum dolor sit amet</h2>
                        <a href="#" class="shop-button">Shop Now</a>
                    </div> --}}
                        <div class="item-collection text-center wow fadeInLeft">
                            <div class="banner-adv zoom-rotate overlay-image">
                                <a href="#" class="adv-thumb-link"><img src="https://thumbs.dreamstime.com/z/red-thirty-percent-off-discount-d-illustration-39298635.jpg" alt=""></a>
                            </div>
                            <h3 class="mont-font title18 underline-title"><a href="#">30% Discount</a></h3>
                            {{-- <h2 class="vibes-font">Lorem ipsum dolor sit amet</h2> --}}
                            <a href="#" class="shop-button">Shop Now</a>
                        </div>
                    
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {{-- <div class="intro-collection wow fadeInRight">
                        <p>Praesent vestibu lum molestie lacus. Aenean nonummyendre rit mauris. Fusce suscipit varius lorem ipsum dolor sit amet consec tetuer adipi scing elit.</p>
                        <div class="text-center">
                            <a href="#" class="viewall-button">View all Offers <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                        </div>
                    </div> --}}
                    <div class="item-collection text-center wow fadeInRight">
                        <div class="banner-adv zoom-rotate overlay-image">
                            <a href="#" class="adv-thumb-link"><img src="/images/photos/collection/collection_02.jpg" alt=""></a>
                        </div>
                        <h3 class="mont-font title18 underline-title"><a href="#">15% Discounts</a></h3>
                        {{-- <h2 class="vibes-font">Lorem ipsum dolor sit amet</h2> --}}
                        <a href="#" class="shop-button">Shop Now</a>
                    </div>
                    <div class="banner-collection banner-adv zoom-image fade-out-in  wow fadeInRight">
                        <a href="#" class="adv-thumb-link"><img src="/images/photos/collection/banner.jpg" alt=""></a>
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
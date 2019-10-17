@extends('layouts.app')

@section('content')
    <div class="banner-slider banner-shop-slider bg-slider">
        <div class="wrap-item" data-pagination="true" data-autoplay="true" data-transition="fade" data-navigation="true" data-itemscustom="[[0,1]]">
            <div class="item-slider">
                <div class="banner-thumb"><a href="#"><img src="/images/shop/shop-banner1.jpg" alt="" /></a></div>
               
            </div>
            <div class="item-slider">
                <div class="banner-thumb"><a href="#"><img src="/images/shop/shop-banner2.jpg" alt="" /></a></div>
                
            </div>
            <div class="item-slider">
                <div class="banner-thumb"><a href="#"><img src="/images/shop/shop-banner3.jpg" alt="" /></a></div>
                
            </div>
        </div>
    </div>
    <!-- End Banner Slider -->
    <div class="bread-crumb">
        <div class="container">
            <a href="#">Home</a> <a href="#">Shop</a> <span>Cosmetics</span>
        </div>
    </div>
    <!-- End Bread Crumb -->
    <div class="content-pages">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    {{-- <div class="sidebar-left sidebar-shop">
                        <div class="widget widget-product-cat">
                            <h2 class="widget-title title14 active">cosmetics</h2>
                            <div class="widget-content" style="display:block">
                                <ul class="list-none filter-default">
                                    <li class="has-sub-cat">
                                        <a href="#">Base makeup <span>(30)</span></a>
                                        <ul class="list-none">
                                            <li><a href="#">Lipstick <span>(9)</span></a></li>
                                            <li><a href="#">Eye Shadow <span>(3)</span></a></li>
                                            <li><a href="#">Mascara <span>(7)</span></a></li>
                                            <li><a href="#">Eyeliner <span>(1)</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub-cat">
                                        <a href="#" class="active">Point makeup <span>(20)</span></a>
                                        <ul class="list-none" style="display: block;">
                                            <li><a href="#">Lipstick <span>(9)</span></a></li>
                                            <li><a href="#">Eye Shadow <span>(3)</span></a></li>
                                            <li><a href="#">Mascara <span>(7)</span></a></li>
                                            <li><a href="#">Eyeliner <span>(1)</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub-cat">
                                        <a href="#">Skincare <span>(16)</span></a>
                                        <ul class="list-none">
                                            <li><a href="#">Lipstick <span>(9)</span></a></li>
                                            <li><a href="#">Eye Shadow <span>(3)</span></a></li>
                                            <li><a href="#">Mascara <span>(7)</span></a></li>
                                            <li><a href="#">Eyeliner <span>(1)</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                        <div class="widget widget-filter-price">
                            <h2 class="widget-title title14 active">Price Per Item</h2>
                            <div class="widget-content" style="display:block">
                                <ul class="list-none filter-default">
                                    <li><a href="#">Under $250</a></li>
                                    <li><a href="#">$250 to $500</a></li>
                                    <li><a href="#">$500 to $1,000</a></li>
                                    <li><a href="#">$1,000 to $1,500</a></li>
                                    <li><a href="#">$1,500 to $2,500</a></li>
                                </ul>
                                <div class="range-filter">
                                    <div id="slider-range"></div>
                                    <div id="amount"></div>
                                    <button class="btn-filter">Filter</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget -->
                        <div class="widget widget-filter-attr">
                            <h2 class="widget-title title14">Style</h2>
                            <div class="widget-content">
                                <ul class="list-none filter-default">
                                    <li><a href="#">Contemporary</a></li>
                                    <li><a href="#">Rustic</a></li>
                                    <li><a href="#">Traditional</a></li>
                                    <li><a href="#">Country/Cottage</a></li>
                                    <li><a href="#">Modern</a></li>
                                    <li><a href="#">Coastal</a></li>
                                    <li><a href="#">Glam</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                        <div class="widget widget-filter-attr">
                            <h2 class="widget-title title14">Size</h2>
                            <div class="widget-content">
                                <ul class="list-none filter-default">
                                    <li><a href="#">Twin <span>(497)</span></a></li>
                                    <li><a href="#">Full / Double <span>(655)</span></a></li>
                                    <li><a href="#">Queen <span>(33)</span></a></li>
                                    <li><a href="#">King <span>(234)</span></a></li>
                                    <li><a href="#">California King <span>(43)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                        <div class="widget widget-filter-attr widget-filter-color">
                            <h2 class="widget-title title14 active">Color</h2>
                            <div class="widget-content custom-scroll" style="display:block">
                                <ul class="list-inline-block filter-color">
                                    <li><a href="#"><span style="background:linear-gradient(#d2d2d2,#111111);background:-webkit-linear-gradient(#d2d2d2,#111111)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#f2f2f2,#bcbdbd);background:-webkit-linear-gradient(#f2f2f2,#bcbdbd)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#ffffff,#ffffff);background:-webkit-linear-gradient(#ffffff,#ffffff);border:1px solid #e5e5e5"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#9b6a4c,#7e4d2f);background:-webkit-linear-gradient(#9b6a4c,#7e4d2f)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#ea6461,#ca4543);background:-webkit-linear-gradient(#ea6461,#ca4543)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#fae478,#dcc450);background:-webkit-linear-gradient(#fae478,#dcc450)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#82b354,#5f9734);background:-webkit-linear-gradient(#82b354,#5f9734)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#7ea4e2,#5e86c3);background:-webkit-linear-gradient(#7ea4e2,#5e86c3)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#4c77a4,#224f80);background:-webkit-linear-gradient(#4c77a4,#224f80)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#9d8ac0,#75619a);background:-webkit-linear-gradient(#9d8ac0,#75619a)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#f0a056,#d4843a);background:-webkit-linear-gradient(#f0a056,#d4843a)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#fb7a02,#2d0c57);background:-webkit-linear-gradient(#fb7a02,#2d0c57)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#045e1b,#e31128);background:-webkit-linear-gradient(#045e1b,#e31128)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#f27b01,#036219,#6a1869);background:-webkit-linear-gradient(#f27b01,#036219,#6a1869)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#cdef86,#78d43a);background:-webkit-linear-gradient(#cdef86,#78d43a)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#f5d5e4,#dab8c8);background:-webkit-linear-gradient(#f5d5e4,#dab8c8)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#e798be,#b25e86);background:-webkit-linear-gradient(#e798be,#b25e86)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#f5d5d5,#ff3904);background:-webkit-linear-gradient(#f5d5d5,#ff3904)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#fffc15,#ffbb00);background:-webkit-linear-gradient(#fffc15,#ffbb00)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#ff9f82,#e43131);background:-webkit-linear-gradient(#ff9f82,#e43131)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#9b6a4c,#7e4d2f);background:-webkit-linear-gradient(#9b6a4c,#7e4d2f)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#ea6461,#ca4543);background:-webkit-linear-gradient(#ea6461,#ca4543)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#fae478,#dcc450);background:-webkit-linear-gradient(#fae478,#dcc450)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#82b354,#5f9734);background:-webkit-linear-gradient(#82b354,#5f9734)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#7ea4e2,#5e86c3);background:-webkit-linear-gradient(#7ea4e2,#5e86c3)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#4c77a4,#224f80);background:-webkit-linear-gradient(#4c77a4,#224f80)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#9d8ac0,#75619a);background:-webkit-linear-gradient(#9d8ac0,#75619a)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#f0a056,#d4843a);background:-webkit-linear-gradient(#f0a056,#d4843a)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#fb7a02,#2d0c57);background:-webkit-linear-gradient(#fb7a02,#2d0c57)"></span></a></li>
                                    <li><a href="#"><span style="background:linear-gradient(#045e1b,#e31128);background:-webkit-linear-gradient(#045e1b,#e31128)"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                        <div class="widget widget-filter-attr">
                            <h2 class="widget-title title14">Brands</h2>
                            <div class="widget-content">
                                <ul class="list-none filter-default">
                                    <li><a href="#">Wade Logan <span>(222)</span></a></li>
                                    <li><a href="#">Loon Peak <span>(144)</span></a></li>
                                    <li><a href="#">Canligaris <span>(55)</span></a></li>
                                    <li><a href="#">Liberty Furniture <span>(32)</span></a></li>
                                    <li><a href="#">Internationnal Concepts <span>(41)</span></a></li>
                                    <li><a href="#">American Drew<span>(9)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                        <div class="widget widget-filter-attr">
                            <h2 class="widget-title title14">Base Metarial</h2>
                            <div class="widget-content">
                                <ul class="list-none filter-default">
                                    <li><a href="#">Solid Wood<span>(323)</span></a></li>
                                    <li><a href="#">Glass<span>(114)</span></a></li>
                                    <li><a href="#">Manufactured Wood <span>(994)</span></a></li>
                                    <li><a href="#">Metal<span>(184)</span></a></li>
                                    <li><a href="#">Marble<span>(87)</span></a></li>
                                    <li><a href="#">Laminate<span>(74)</span></a></li>
                                    <li><a href="#">Slate<span>(14)</span></a></li>
                                    <li><a href="#">Granite<span>(12)</span></a></li>
                                    <li><a href="#">Tile<span>(5)</span></a></li>
                                    <li><a href="#">Plastic<span>(3)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                        <div class="widget widget-filter-attr">
                            <h2 class="widget-title title14 active">Customer Rating</h2>
                            <div class="widget-content" style="display:block">
                                <ul class="list-none filter-default">
                                    <li>
                                        <a href="#">
                                            <div class="product-rate">
                                                <div class="product-rating" style="width:100%"></div>
                                            </div>
                                            <span>(72)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="product-rate">
                                                <div class="product-rating" style="width:80%"></div>
                                            </div>
                                            <span>(85)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="product-rate">
                                                <div class="product-rating" style="width:60%"></div>
                                            </div>
                                            <span>(37)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div> --}}
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="content-shop">
                        <div class="sort-pagi-bar clearfix">
                            <h2 class="title18 mont-font pull-left">All Products</h2>
                            <div class="sort-view pull-right">
                                <div class="view-type pull-left">
                                    <a href="grid-with-sidebar.html" class="grid-view active"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="list-with-sidebar.html" class="list-view"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                </div>
                                <div class="sort-bar select-box">
                                    <label>Sort:</label>
                                    <select>
                                        <option value="">Recommended</option>
                                        <option value="">position</option>
                                        <option value="">price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-sidebar">
                            <div class="row">
                                @foreach ($products as $product)
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-product item-product-grid">
                                        <div class="product-thumb box-hover-dir">
                                            <img src="{{ $product->photos->first()['link'] }}" alt="">
                                            <div class="info-product-hover-dir">
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
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="/products/{{ $product->slug }}">{{ $product->title }}</a></h3>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width:100%"></div>
                                            </div>
                                            <div class="product-price">
                                                <ins><span>{{ $product->price }}</span></ins>
                                                <del><span>{{ $product->mrp }}</span></del>
                                                {{-- <span class="sale-label">-20<sup>%</sup></span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="pagi-nav-bar text-center radius">
                            {!! $products->render() !!}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Pages -->
@endsection
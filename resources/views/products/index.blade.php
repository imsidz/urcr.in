@extends('layouts.app')

@section('content')
<div class="banner-slider banner-shop-slider bg-slider">
    <div class="wrap-item" data-pagination="false" data-autoplay="true" data-transition="fade" data-navigation="false"
        data-itemscustom="[[0,1]]">
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
        <a href="/">Home</a> <span>Products</span>
    </div>
</div>
<!-- End Bread Crumb -->
<div class="content-pages">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="sidebar-left sidebar-shop">
                    <form method="GET">
                        <div class="widget widget-filter-price">
                            <h2 class="widget-title title14 active">Price Per Item</h2>
                            <div class="widget-content" style="display:block">

                                <div class="range-filter">
                                    <div id="slider-range"></div>
                                    <div id="amount"></div>
                                    <button class="btn-filter">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-filter-attr">
                            <h2 class="widget-title title14">Style</h2>
                            <div class="widget-content">
                                <ul class="list-none filter-default">
                                    @foreach ($styles as $style)
                                    <li>
                                        <input type="checkbox" name="style" id="" value="{{ $style->name }}"
                                            onchange="javascript:this.form.submit()">
                                        {{ $style->name }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-filter-attr">
                            <h2 class="widget-title title14">Size</h2>
                            <div class="widget-content">
                                <ul class="list-none filter-default">
                                    @foreach ($sizes as $size)

                                    <li>
                                        <input type="checkbox" name="size" id="" value="{{ $size->name }}"
                                            onchange="javascript:this.form.submit()">
                                        {{ $size->name }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-filter-attr">
                            <h2 class="widget-title title14">Colors</h2>
                            <div class="widget-content">
                                <ul class="list-none filter-default">
                                    @foreach ($colors as $color)
                                    <li>
                                        <input type="checkbox" name="color" id="" value="{{ $color->name }}"
                                            onchange="javascript:this.form.submit()">
                                        <a href="#">{{ $color->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <div class="widget widget-filter-attr">
                            <h2 class="widget-title title14">Base Metarial</h2>
                            <div class="widget-content">
                                <ul class="list-none filter-default">
                                    @foreach ($materials as $material)

                                    <li>
                                        <input type="checkbox" name="material" id="" value="{{ $material->name }}"
                                            onchange="javascript:this.form.submit()">
                                        {{ $material->name }} <span>({{ $material->products->count() }})</span>
                                    </li>
                                    @endforeach
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
                        {{-- <br> --}}
                        {{-- <button class="btn btn-primary pull-right">Save filter</button> --}}
                    </form>
                </div>
            </div>
            <div class="col-md-10 col-sm-8 col-xs-12">
                <div class="content-shop">
                    <div class="sort-pagi-bar clearfix">
                        {{-- <h2 class="title18 mont-font pull-left">Latest Products</h2> --}}
                        {{-- <div class="sort-view pull-right">
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
                            </div> --}}
                    </div>
                    <div class="content-grid-sidebar">
                        @foreach($products->chunk(6) as $chunk)

                        <div class="row">
                            @foreach ($chunk as $product)
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="item-product item-product-grid">
                                    <div class="product-thumb box-hover-dir">
                                        <a href="/products/{{ $product->slug }}">
                                            <img src="{{ $product->photos->first()['link'] }}" alt="">
                                        </a>
                                        {{-- <div class="info-product-hover-dir">
                                                <div class="inner-product-hover-dir">
                                                    <div class="content-product-hover-dir">
                                                        <a href="/products/{{ $product->slug }}" class="quickview-link
                                        fancybox.iframe">Quick view <i class="fa fa-arrow-circle-right"
                                            aria-hidden="true"></i></a>
                                        <span class="product-total-sale">154</span>
                                        <div class="product-extra-link">
                                            <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"
                                                    aria-hidden="true"></i><span>Add to cart</span></a>
                                            <a href="#" class="wishlist-link"><i class="fa fa-heart"
                                                    aria-hidden="true"></i><span>Wishlist</span></a>
                                            <a href="#" class="compare-link"><i class="fa fa-stumbleupon"
                                                    aria-hidden="true"></i><span>Compare</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="/products/{{ $product->slug }}">{{ $product->title }}</a>
                            </h3>
                            <div class="product-rate">
                                <div class="product-rating" style="width:100%"></div>
                            </div>
                            <div class="product-price">
                                <ins><span>₹{{ $product->price }}</span></ins>
                                <del><span>₹{{ $product->mrp }}</span></del>
                                {{-- <span class="sale-label">-20<sup>%</sup></span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @endforeach

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

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
    <div class="bread-crumb">
        <div class="container">
            <a href="#">Home</a> <a href="#">Shop</a> <span>Cosmetics</span>
        </div>
	</div>
	
    <div class="content-pages">
			<div class="container">
				<div class="detail-product detail-external-link">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="detail-gallery">
								<div class="wrap-detail-gallery">
									<div class="mid">
										<img src="{{$product->photos->first()['link']}}" alt=""/>
									</div>
									<div class="gallery-control">
										<div class="carousel">
											<ul class="list-none">
												@foreach ($product->photos as $photo)
												<li><a href="#" @if($photo->link === $product->photos->first()['link']) class="active" @endif><img src="{{$photo->link}}" alt=""/></a></li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
								<div class="detail-social">
									<a href="#" class="share-face"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#" class="share-twit"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#" class="share-pint"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
								</div>
							</div>
							<!-- End Gallery -->
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="detail-info">
								<h2 class="title-product-detail">Topshop Name Product</h2>
								<ul class="list-inline-block review-rating">
									<li>
										<div class="product-rate rate-counter">
											<div class="product-rating" style="width:100%"></div>
											<span>(1s)</span>
										</div>
									</li>
									<li>
										<a href="#" class="add-review">Add your review</a>
									</li>
								</ul>
								<div class="product-price">
									<ins><span>{{ $product->price }}</span></ins>
									<del><span>{{ $product->mrp }}</span></del>
									{{-- <span class="sale-label">-20<sup>%</sup></span> --}}
								</div>
								<div class="product-more-info">
									<h2 class="title14">Product Features</h2>
									{!! $product->short !!}
								</div>
								<div class="detail-qty info-qty border radius">
									<a href="#" class="qty-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<span class="qty-val">1</span>
									<a href="#" class="qty-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
								</div>
								<form action="/add-to-cart/{{ $product->slug }}" method="POST">
									@csrf
									<button type="submit" class="addcart-link add-cart-detail">Add to Cart</button>
								</form>
								{{-- <a class="addcart-link add-cart-detail" href="#">Add to Cart</a> --}}
								<div class="product-extra-link">
									<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
									<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
								</div>
								<div class="detail-extra">
									<p class="desc product-code">SUK: <span>tem009</span></p>
									<p class="desc product-available">Available: <span class="avail-instock">instock</span></p>
									<p class="desc tags-detail">
										<span>Tags:</span> 
										<a href="#">Homeware</a>
										<a href="#">Furniture</a>
										<a href="#">Living room</a>
										<a href="#">Gift</a>
										<a href="#">Flower</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Detail Product -->
				<div class="tabs-detail">
					<div class="title-tab-detail">
						<ul class="list-inline-block text-center">
							<li><a href="#tab1" data-toggle="tab">Description</a></li>
							<li class="active"><a href="#tab2" data-toggle="tab">Additional Information</a></li>
							<li><a href="#tab3" data-toggle="tab">Reviews</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="tab1" class="tab-pane">
							<div class="detail-descript">
								{!! $product->description !!}
							</div>
						</div>
						<div id="tab2" class="tab-pane active">
							<div class="detail-addition">
								{!! $product->full !!}
							</div>
						</div>
						<div id="tab3" class="tab-pane">
							<div class="content-tags-detail">
								<h3 class="title14">2 Review for bakery macaron</h3>
								<ul class="list-none list-tags-review">
									<li>
										<div class="review-author">
											<a href="#"><img src="/images/shop/author1.jpg" alt=""></a>
										</div>
										<div class="review-info">
											<p class="review-header"><a href="#"><strong>7up-theme</strong></a> &ndash; March 30, 2017:</p>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<p class="desc">Really a nice stool. It was better than I expected in quality. The color is a rich, honey brown and looks a little lighter than pictured but still a great stool for the money.</p>
										</div>
									</li>
									<li>
										<div class="review-author">
											<a href="#"><img src="/images/shop/author2.jpg" alt=""></a>
										</div>
										<div class="review-info">
											<p class="review-header"><a href="#"><strong>7up-theme</strong></a> &ndash; March 30, 2017:</p>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<p class="desc">Really a nice stool. It was better than I expected in quality. The color is a rich, honey brown and looks a little lighter than pictured but still a great stool for the money.</p>
										</div>
									</li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
				<!-- End Tab Detail -->
				<div class="related-product">
					<h2 class="title14 text-center">Customers Also Viewed</h2>
					<div class="product-related-slider">
						<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[480,2],[768,3],[980,4]]">
							<div class="item-product item-product-grid">
								<div class="product-thumb box-hover-dir">
									<img src="/images/photos/topshop_product_13.jpg" alt="">
									<div class="info-product-hover-dir">
										<div class="inner-product-hover-dir">
											<div class="content-product-hover-dir">
												<a href="quick-view.html" class="quickview-link fancybox.iframe">Quick view <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
												<span class="product-total-sale">( 10 Sales )</span>
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
									<h3 class="product-title"><a href="#">{{ $product->title }}</a></h3>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<div class="product-price">
										<ins><span>$400.00</span></ins>
										<del><span>$480.00</span></del>
										<span class="sale-label">-20<sup>%</sup></span>
									</div>
								</div>
							</div>
							<div class="item-product item-product-grid">
								<div class="product-thumb box-hover-dir">
									<img src="/images/photos/topshop_product_14.jpg" alt="">
									<div class="info-product-hover-dir">
										<div class="inner-product-hover-dir">
											<div class="content-product-hover-dir">
												<a href="quick-view.html" class="quickview-link fancybox.iframe">Quick view <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
												<span class="product-total-sale">( 10 Sales )</span>
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
									<h3 class="product-title"><a href="#">topshop Name Product</a></h3>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<div class="product-price">
										<ins><span>$400.00</span></ins>
										<del><span>$480.00</span></del>
										<span class="sale-label">-20<sup>%</sup></span>
									</div>
								</div>
							</div>
							<div class="item-product item-product-grid">
								<div class="product-thumb box-hover-dir">
									<img src="/images/photos/topshop_product_15.jpg" alt="">
									<div class="info-product-hover-dir">
										<div class="inner-product-hover-dir">
											<div class="content-product-hover-dir">
												<a href="quick-view.html" class="quickview-link fancybox.iframe">Quick view <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
												<span class="product-total-sale">( 10 Sales )</span>
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
									<h3 class="product-title"><a href="#">topshop Name Product</a></h3>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<div class="product-price">
										<ins><span>$400.00</span></ins>
										<del><span>$480.00</span></del>
										<span class="sale-label">-20<sup>%</sup></span>
									</div>
								</div>
							</div>
							<div class="item-product item-product-grid">
								<div class="product-thumb box-hover-dir">
									<img src="/images/photos/topshop_product_16.jpg" alt="">
									<div class="info-product-hover-dir">
										<div class="inner-product-hover-dir">
											<div class="content-product-hover-dir">
												<a href="quick-view.html" class="quickview-link fancybox.iframe">Quick view <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
												<span class="product-total-sale">( 10 Sales )</span>
												<div class="product-extra-link">
													<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
													<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
													<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
												</div>
											</div>
										</div>
									</div>
									<span class="product-new-label">new</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="#">topshop Name Product</a></h3>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<div class="product-price">
										<ins><span>$400.00</span></ins>
										<del><span>$480.00</span></del>
										<span class="sale-label">-20<sup>%</sup></span>
									</div>
								</div>
							</div>
							<div class="item-product item-product-grid">
								<div class="product-thumb box-hover-dir">
									<img src="/images/photos/topshop_product_17.jpg" alt="">
									<div class="info-product-hover-dir">
										<div class="inner-product-hover-dir">
											<div class="content-product-hover-dir">
												<a href="quick-view.html" class="quickview-link fancybox.iframe">Quick view <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
												<span class="product-total-sale">( 10 Sales )</span>
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
									<h3 class="product-title"><a href="#">topshop Name Product</a></h3>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<div class="product-price">
										<ins><span>$400.00</span></ins>
										<del><span>$480.00</span></del>
										<span class="sale-label">-20<sup>%</sup></span>
									</div>
								</div>
							</div>
							<div class="item-product item-product-grid">
								<div class="product-thumb box-hover-dir">
									<img src="/images/photos/topshop_product_18.jpg" alt="">
									<div class="info-product-hover-dir">
										<div class="inner-product-hover-dir">
											<div class="content-product-hover-dir">
												<a href="quick-view.html" class="quickview-link fancybox.iframe">Quick view <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
												<span class="product-total-sale">( 10 Sales )</span>
												<div class="product-extra-link">
													<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
													<a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
													<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
												</div>
											</div>
										</div>
									</div>
									<span class="product-new-label">new</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="#">topshop Name Product</a></h3>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<div class="product-price">
										<ins><span>$400.00</span></ins>
										<del><span>$480.00</span></del>
										<span class="sale-label">-20<sup>%</sup></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Related Product -->
			</div>
		</div>
@endsection
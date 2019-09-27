<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Topshop is new Wordpress theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Wordpress theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="Topshop,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<title>Topshop | Home Style 1</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/libs/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/owl.theme.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/jquery.mCustomScrollbar.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/animate.css"/>
	<link rel="stylesheet" type="text/css" href="/css/libs/hover.css"/>
	<link rel="stylesheet" type="text/css" href="/css/color.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="/css/theme.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="/css/responsive.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="/css/browser.css" media="all"/>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div class="header header1">
			<div class="container">
				<div class="header-main">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="header-phone">
								<span class="header-phone-icon color"><i class="fa fa-phone" aria-hidden="true"></i></span>
								<span class="color">Call today:</span>
								<strong>+1 800 555–123–2323</strong>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="logo logo1">
								<h1 class="hidden">topshop wordpress theme</h1>
								<a href="/"><img src="/images/logo.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							@include('layouts.app.cart')
						</div>
					</div>
				</div>
				<!-- End Header Main -->
				<div class="header-nav text-center">
					@include('layouts.app.topmenu')
				</div>
				<!-- End Header Nav -->
			</div>
		</div>
		<div class="menu-ontop bg-white header-ontop">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<ul class="list-inline-block">
							<li>
								<div class="logo-ontop">
									<a href="/"><img src="/images/logo-ontop.png" alt="" /></a>
								</div>
							</li>
						
						</ul>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<ul class="meta-link-ontop list-inline-block pull-right">
							<li>
								<div class="search-ontop">
									<form class="search-form">
										<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Search..." type="text">
										<div class="submit-form">
											<input value="" type="submit">
										</div>
									</form>
								</div>
							</li>
							<li>
								<a href="#" class="user-link"><i class="fa fa-user" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
							</li>
							<li>
								<div class="mini-cart-box mini-cart-ontop">
									<a class="mini-cart-link" href="cart.html">
										<span class="mini-cart-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
										<span class="mini-cart-number">0</span>
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
													<h3 class="product-title"><a href="#">{{ $cart->name }} </a></h3>
													<div class="product-price">
														<ins><span>₹{{ $cart->price }}</span></ins>
													</div>
													<div class="product-rate">
														<div class="product-rating" style="width:100%"></div>
													</div>
												</div>
											</div>
											@endforeach
										
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
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Menu On Top -->
	</div>
	<!-- End Header -->
	<div id="content">
        @yield('content')
		
		
		<!-- End View Collection -->
		
		
		<!-- End Our Services -->
	</div>
	@include('layouts.app.footer')
</div>
<script type="text/javascript" src="/ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="/js/libs/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/libs/jquery.fancybox.js"></script>
<script type="text/javascript" src="/js/libs/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/libs/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/libs/jquery.jcarousellite.js"></script>
<script type="text/javascript" src="/js/libs/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="/js/libs/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="/js/libs/modernizr.custom.js"></script>
<script type="text/javascript" src="/js/libs/jquery.hoverdir.js"></script>
<script type="text/javascript" src="/js/libs/slick.js"></script>
<script type="text/javascript" src="/js/libs/wow.js"></script>
<script type="text/javascript" src="/js/theme.js"></script>
@stack('scripts')
</body>

</html>
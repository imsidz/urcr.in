<nav class="main-nav main-nav1">
        <ul>
            <li class="menu-item-has-children">
                <a href="/">Home </a>
            </li>
            <li class="has-mega-menu">
                <a href="#">Categories</a>
                <div class="mega-menu">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mega-menu-box">
                                <h2 class="title14 mont-font color">CATEGORY PAGE</h2>
                                <ul class="list-none">
                                    <li><a href="#">Off-Canvas Filtering</a></li>
                                    <li><a href="#">Full Width Layout</a></li>
                                    <li><a href="#">List layout</a></li>
                                    <li><a href="#">Masonry layout</a></li>
                                    <li><a href="#">Top Content</a></li>
                                    <li><a href="#">Transparent Header</a></li>
                                    <li><a href="#">Dark Style</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mega-menu-box">
                                <h2 class="title14 mont-font color">product PAGE</h2>
                                <ul class="list-none">
                                    <li><a href="#">Left Column</a></li>
                                    <li><a href="#">Right Column</a></li>
                                    <li><a href="#">Full Width Gallery</a></li>
                                    <li><a href="#">Vertical Gallery</a></li>
                                    <li><a href="#">Variations</a></li>
                                    <li><a href="#">Transparent Header</a></li>
                                    <li><a href="#">Affiliat</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mega-menu-box">
                                <h2 class="title14 mont-font color">more...</h2>
                                <ul class="list-none">
                                    <li><a href="#">Accordion Style</a></li>
                                    <li><a href="#">Section Style</a></li>
                                    <li><a href="#">Vertical Tabs</a></li>
                                    <li><a href="#">Normal Tabs</a></li>
                                    <li><a href="#">Dark Style</a></li>
                                    <li><a href="#">Image Zoom</a></li>
                                    <li><a href="#">Product Examples</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mega-menu-thumb"><img src="images/home/mega-menu.png" alt="" /></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu-item-has-children">
                <a href="/products">Products</a>
                {{-- <ul class="sub-menu">
                    <li><a href="vendor-shop.html">Vendor Shop</a></li>
                    <li><a href="vendor-product.html">Vendor Product</a></li>
                    <li><a href="vendor-rating.html">Vendor Rating</a></li>
                </ul> --}}
            </li>
            <li><a href="/about">About us</a></li>
            <li class="menu-item-has-children">
                <a href="contact">Contact Us</a>
                {{-- <ul class="sub-menu">
                    <li><a href="grid-with-sidebar.html">Grid With Sidebar</a></li>
                    <li><a href="list-with-sidebar.html">List With Sidebar</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Products</a>
                        <ul class="sub-menu">
                            <li><a href="detail.html">Detail</a></li>
                            <li><a href="detail-simple.html">Detail Simple</a></li>
                            <li><a href="detail-group.html">Detail Group</a></li>
                            <li><a href="detail-external-link.html">Detail External Link</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="member-login.html">Login/Register</a></li>
                    <li><a href="my-profile.html">Profile</a></li>
                </ul> --}}
            </li>
            @auth
            <li><a href="/profile">{{ Auth::user()->name }}</a></li>
            @else
            <li><a href="/login">Login</a></li>
            @endauth
            {{-- <li><a href="#">Postfolio</a></li>
            <li class="menu-item-has-children">
                <a href="#">Blog </a>
                <ul class="sub-menu">
                    <li><a href="blog.html">Blog Post</a></li>
                    <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                    <li><a href="single.html">Single Post</a></li>
                </ul>
            </li>
            <li><a href="#">Elements</a></li> --}}
        </ul>
        <a href="#" class="toggle-mobile-menu"><span></span></a>
    </nav>
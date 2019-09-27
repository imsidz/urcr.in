@extends('layouts.app')

@section('content')
<div class="banner-slider banner-cart-slider bg-slider">
    <div class="wrap-item" data-pagination="false" data-itemscustom="[[0,1]]">
        <div class="item-slider">
            <div class="banner-thumb"><a href="#"><img src="/images/shop/shop-banner1.jpg" alt="" /></a></div>
        </div>
    </div>
</div>
    <div class="content-page woocommerce">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-shop-page dark font-bold mont-font text-center title30">Member</h2>
                    <div class="register-content-box">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-ms-12"> 
                                <div class="check-billing">
                                    <div class="form-my-account">
                                        <form class="block-login" method="POST" action="/login">
                                            @csrf
                                            <h2 class="title24 title-form-account">Login</h2>
                                            <p>
                                                <label>Username or email address <span class="required">*</span></label>
                                                <input type="text" name="email" class="form-control">
                                            </p>
                                            <p>
                                                <label>Password <span class="required">*</span></label>
                                                <input type="password" name="password" class="form-control">
                                            </p>
                                            
                                            <p>
                                                <input type="submit" class="register-button">
                                            </p>
                                            <div class="table-custom create-account">
                                                <div class="text-left">
                                                    <p>
                                                        <input type="checkbox" id="remember"> <label for="remember">Remember me</label>
                                                    </p>
                                                </div>
                                                <div class="text-right">
                                                    <a href="#" class="color">Lost your password?</a>
                                                </div>
                                            </div>
                                            <h2 class="title18 social-login-title">Or login with</h2>
                                            <div class="social-login-block table-custom text-center">
                                                <div class="social-login-btn">
                                                    <a href="#" class="login-fb-link">Facebook</a>
                                                </div>
                                                <div class="social-login-btn">
                                                    <a href="#" class="login-goo-link">Google</a>
                                                </div>
                                            </div>
                                        </form>
                                        <form class="block-register" method="POST" action="/register">
                                            @csrf
                                            <h2 class="title24 title-form-account">REGISTER</h2>
                                            <p>
                                                    <label>Full Name <span class="required">*</span></label>
                                                    <input type="text" name="name">
                                                </p>
                                            <p>
                                                <label>Username <span class="required">*</span></label>
                                                <input type="text" name="username">
                                            </p>
                                            <p>
                                                <label>Email address <span class="required">*</span></label>
                                                <input type="text" name="email">
                                            </p>
                                            <p>
                                                <label>Password <span class="required">*</span></label>
                                                <input type="password" name="password" class="form-control">
                                            </p>
                                            <p>
                                                <label>Confirm Password <span class="required">*</span></label>
                                                <input type="password" name="password_confirmation" class="form-control">
                                            </p>
                                            <p>
                                                <input type="submit" class="register-button">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-ms-12">
                                <div class="check-address">
                                    <div class="form-my-account check-register text-center">
                                        <h2 class="title24 title-form-account">Register</h2>
                                        <p class="desc">Registering for this site allows you to access your order status and history. Just fill in the fields below, and we’ll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.</p>
                                        <a href="#" class="shop-button bg-color login-to-register" data-login="Login" data-register="Register">Register</a>
                                        <p class="desc title12 silver"><i>Click to switch Register/Login</i></p>
                                    </div>
                                </div>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
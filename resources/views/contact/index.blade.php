@extends('layouts.app')

@section('content')
<div class="banner-slider banner-cart-slider bg-slider">
        <div class="wrap-item" data-pagination="false" data-itemscustom="[[0,1]]">
            <div class="item-slider">
                <div class="banner-thumb"><a href="#"><img src="/images/pages/banner.jpg" alt="" /></a></div>
            </div>
        </div>
    </div>
<div class="bread-crumb">
        <div class="container">
            <a href="#">Home</a> <span>Contact Us</span>
        </div>
    </div>
    <!-- End Bread Crumb -->
    <div class="content-pages">
        <div class="container">
            <div class="content-contact-page">
                <h2 class="title30 mont-font">contact us</h2>
                <div class="contact-google-map bg-white border">
                    <div id="map" class="map-custom"></div>
                    <script>
                      function initMap() {
                        var myLatLng = {lat: 40.707914, lng: -74.009628};

                        var map = new google.maps.Map(document.getElementById('map'), {
                          zoom: 12,
                          center: myLatLng
                        });

                        var marker = new google.maps.Marker({
                          position: myLatLng,
                          map: map,
                        });
                      }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEkQ6AW_lnHAzPiXPdSNy1GKXiI1I9AGg&amp;callback=initMap" async defer></script>
                </div>
                <!-- End Google Map -->
                <div class="contact-page-info blockquote">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="contact-box contact-address-box">
                                <span class="color"><i class="fa fa-institution"></i></span>
                                <label class="title16 color">ADDRESS:</label>
                                <p class="desc">The Company Name Inc. 4320 St Vincent Place,Glasgow, DC 28</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-7 col-xs-12">
                            <div class="contact-box">
                                <span class="color"><i class="fa fa-phone"></i></span>
                                <ul class="list-inline-block">
                                    <li>
                                        <label class="title16 color">PHONES:</label>
                                    </li>
                                    <li>
                                        <span>800-6688-999;</span>
                                        <span>800-8866-404</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-box">
                                <span class="color"><i class="fa fa-fax"></i></span>
                                <ul class="list-inline-block">
                                    <li>
                                        <label class="title16 color">Fax:</label>
                                    </li>
                                    <li>
                                        <span>800-6969-0044;</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-5 col-xs-12">
                            <div class="contact-box">
                                <span class="color"><i class="fa fa-envelope-open"></i></span>
                                <label class="title16 color">e-mail:</label>
                                <p class="desc"><a href="#">goodshop@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Info -->
                <div class="contact-form-faq">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-form">
                                <h2 class="title18">Contact Form</h2>
                                <form>
                                    <input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Your name *" type="text">
                                    <input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Your e-mail address *" type="text">
                                    <input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Subject *" type="text">
                                    <textarea onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" rows="7">Message *</textarea>
                                    <input type="submit" value="send" class="shop-button" />
                                    <input type="reset" value="Clear" class="shop-button style2" />
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-faq">
                                <h2 class="title18">FAQs</h2>
                                <div class="contact-accordion toggle-tab">
                                    <div class="item-toggle-tab active">
                                        <h2 class="toggle-tab-title">At vero eos et accusamus et iusto</h2>
                                        <p class="desc toggle-tab-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                    </div>
                                    <div class="item-toggle-tab">
                                        <h2 class="toggle-tab-title">Dignissimos ducimus qui blanditiis</h2>
                                        <p class="desc toggle-tab-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                    </div>
                                    <div class="item-toggle-tab">
                                        <h2 class="toggle-tab-title">Raesentium voluptatum deleniti</h2>
                                        <p class="desc toggle-tab-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                    </div>
                                    <div class="item-toggle-tab">
                                        <h2 class="toggle-tab-title">At vero eos et accusamus et iusto</h2>
                                        <p class="desc toggle-tab-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                    </div>
                                    <div class="item-toggle-tab">
                                        <h2 class="toggle-tab-title">Dignissimos ducimus qui blanditiis</h2>
                                        <p class="desc toggle-tab-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi archi tecto aspernatur assumenda cum inventore labore magnam </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Pages -->
@endsection
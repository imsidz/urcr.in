<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Smile 4 Miles" />
    <meta name="keywords" content="Smile 4 Miles" />
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    {{-- fevicon --}}
    <link rel="apple-touch-icon" sizes="57x57" href="/fevicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/fevicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/fevicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/fevicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/fevicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/fevicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/fevicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/fevicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/fevicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/fevicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fevicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/fevicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fevicon/favicon-16x16.png">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="/site.webmanifest">
    <title>smile4miles</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/libs/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/animate.css" />
    <link rel="stylesheet" type="text/css" href="/css/libs/hover.css" />
    <link rel="stylesheet" type="text/css" href="/css/color.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/theme.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/browser.css" media="all" />

</head>

<body>
    <div class="wrap" id="app">
        <div id="header">
            <div class="header header1">
                <div class="container-fluid">
                    <div class="row " style="    padding-top: 25px;
				">

                        <div class="col-md-4">
                            <a href="/" class="pull-right"><img src="/images/logo.png" alt="" width="275"></a>
                        </div>
                        <div class="col-md-4">
                            <div class="newsletter-form">
                                <form action="/search" method="GET">
                                    <input name="search" onblur="if (this.value=='') this.value = this.defaultValue"
                                        onfocus="if (this.value==this.defaultValue) this.value = ''"
                                        value="{{Request::get('search')}}" type="text">
                                    <div class="submit-form">
                                        <input value="" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 10px;">
                            <div class="pull-left">

                                @include('layouts.app.cart')
                                <div class="pull-right list-inline" style="margin-top: 15px;">
                                    @guest
                                    <li class="menu-item-has-children">
                                        <a href="/login">Login</a>
                                    </li>
                                    @else
                                    <li class="menu-item-has-children">
                                        <div class="dropdown">
                                            <a href="#" type="button"
                                                data-toggle="dropdown">{{ Auth::user()->name }}</a>
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="/orders">My Orders</a></li>
                                                <li><a href="/profile">My Profile</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="/logout">Logout</a></li>
                                            </ul>
                                        </div>

                                    </li>
                                    @endguest

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        @include('layouts.app.topmenu')


                    </div>

                </div>

            </div>
            <!-- End Header -->
            <div id="content">
                @yield('content')


            </div>
            @include('layouts.app.footer')
        </div>
    </div>
    <script src="/js/app.js"></script>
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
    <!--Start of Tawk.to Script-->
    <!--Start of Tawk.to Script-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e462fcd298c395d1ce7e2a8/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=439469729970582&autoLogAppEvents=1">
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159241979-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159241979-1');
    </script>


    @stack('scripts')
</body>

</html>

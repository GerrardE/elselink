<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name') }} | @yield('title')</title>

        {!! MetaTag::tag('description') !!}
        {!! MetaTag::tag('image') !!}

        {{--Set default share picture after custom section pictures--}}
        {!! MetaTag::tag('image', asset('images/logo.png')) !!}

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jarallax.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/waves.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css')}}">
    </head>

    <body>
        <section class="top-nav theme-background-alternate-lite">
            <div class="container">
                <div class="row valign-wrapper">
                    <div class="col-md-4">
                        <p class="support-text"><i class="fa fa-clock-o text-theme"></i> 24/7 Support : +2349080245439</p>
                    </div>

                    <div class="col-md-8 text-right">
                        <div class="nav-meta">
                            <a href="#myModal" data-toggle="modal" title="My Account">
                            <i class="fa fa-user-o"></i>
                            <span>My Account</span></a>
                        </div>
                        <div class="nav-meta">
                            <a href="#">
                            <i class="fa fa-money "></i>
                            <span>How to Pay</span></a>
                        </div>

                        <div class="nav-meta">
                            <a href="#">
                            <i class="fa fa-commenting-o "></i>
                            <span>Live Chat</span></a>
                        </div>

                        <div class="nav-meta">
                            <ul class="nav-sociallink">
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <nav class="navbar mb0">
            <div class="container">

                <div class="navbar-header">
                    <div class="navbar-brand">
                        <a href="/"><img src="assets/images/logo.png" class="img-responsive" alt="Theme-logo"></a>
                    </div>

                    <button type="button" class="navbar-toggle theme-background" data-toggle="collapse" data-target="#mynavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar theme-background-alternate"></span>
                    <span class="icon-bar theme-background-alternate"></span>
                    <span class="icon-bar theme-background-alternate"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right valign-wrapper">
                        <li class="dropdown active">
                            <a href="#">Domains</a>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Websites</a>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting</a>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Web Security</a>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Online Marketing</a>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Email & Office</a>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Support</a>
                            <li>
                                <a href="#" title="Shoping cart ">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- call the different content --}}
        @yield('content')

        <section class="theme-background footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <a href="/"><img src="assets/images/footer_logo.png" class="img-responsive" alt="footer_logo" />
                        </a>
                        <p class="text-white mt30">At Elselink we know that even the best technology is only as good as the people behind it. That’s why we offer expert, 24/7 phone support, plus a lot more.
                        </p>
                        <ul class="footer-address text-white">
                            <li>
                                <i class="fa fa-map-marker"></i>27 Rag Stone Road, Berkshire, Slough, UK
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>26 Georgius Cole Estate, Ogba - Ikeja Lagos.
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="#" class="text-white">Customer Care  +234 908 024 5439</a>
                            </li>
                          
                            <li>
                                <i class="fa fa-globe"></i>
                                <a href="http://elselink.com/" class="text-white">www.elselink.com</a>
                            </li>
                            <li>
                            <i class="fa fa-envelope-o"></i>
                                <a href="http://elselink.com/" class="text-white">sales@elselink.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <h4 class="text-white">SUPPORT</h4>
                                <ul class="footer-menu mt30">
                                    <li><a href="#">Product Support</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Raise Ticket</a></li>
                                    <li><a href="#">Live Chat</a></li>
                                    <li><a href="#">Report Abuse</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <h4 class="text-white">SHOPPING</h4>
                                <ul class="footer-menu mt30">
                                    <li><a href="#">Domains</a></li>
                                    <li><a href="#">Hosting</a></li>
                                    <li><a href="#">Websites</a></li>
                                    <li><a href="#">Web Security</a></li>
                                    <li><a href="#">Online Marketing</a></li>
                                    <li><a href="#">Email & Office</a></li>
                                    <li><a href="#">Promos</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <h4 class="text-white">RESOURCES</h4>
                                <ul class="footer-menu mt30">
                                    <li><a href="#">Webmail</a></li>
                                    <li><a href="#">WHOIS</a></li>
                                    <li><a href="#">ICANN Confirmation</a></li>
                                    <li><a href="#">Tools for Pros</a></li>
                                    <li><a href="#">Redeem Code</a></li>
                                    <li><a href="#">Product Catalog</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Elselink Blog</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Site Map</a></li>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <h4 class="text-white">ACCOUNT</h4>
                                <ul class="footer-menu mt30">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">My Renewals</a></li>
                                    <li><a href="#">Create Account</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 footer-foram">
                                <img src="assets/images/footer-foram.png" class="footer-earphone hidden-xs hidden-sm" alt="footer image" />
                                <span class="text-white">Got Question? Call us 24/7!</span>
                                <span class="text-theme-alternate-lite fotter-contact-no">+234-908-024-5439</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="theme-background-alternate-lite mt40">
                <div class="container">
                    <div class="row valign-wrapper mt20 mb10">
                        <div class="col-sm-6 text-left">
                            <ul class="social-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right licence">
                            <p> Privacy Policy | Terms of Service | Elselink Inc © 2019. All rights reserved. </p>
                        </div>
                    </div>
                </div>
            </footer>
        </section>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content sign-in-model">
                    <div class="row valign-wrapper theme-background">
                        <div class="col-sm-4 hidden-xs text-white text-center">
                            <img src="assets/images/sign-in-user-img.png" alt="sign in avtar">
                        </div>

                        <div class="col-sm-12 sign-in-controls">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span class="text-theme">&times;</span>
                                </button>
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#tab1" class="theme-background text-white">Log In</a></li>
                                    <li><a data-toggle="pill" href="#tab2" class="theme-background text-white">Create Account</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div id="tab1" class="tab-pane fade in active">
                                    <form class="form-material set-submit-input mt30">
                                        <div class="form-group set-submit-box">
                                            <input type="text" name="log-cont-no" class="form-control" id="log-cont-no" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label" for="log-cont-no">Mobile No</label>
                                        </div>

                                        <div class="form-group set-submit-box">
                                            <input type="email" name="log-email" class="form-control" id="log-email" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label" for="log-email">Email</label>
                                        </div>

                                        <div class="form-group set-submit-box">
                                            <input type="password" name="log-password" class="form-control" id="log-password" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label" for="log-password">password</label>
                                        </div>

                                        <div class="form-group set-submit-box">
                                            <div class="checkbox text-left">
                                            <label>
                                                <input type="checkbox" value="0">I have read and agree to Elselink Policy
                                            </label>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-theme btn-subscribe">COMPLETE</button>
                                    </form>
                                </div>

                                <div id="tab2" class="tab-pane fade">
                                    <form class="form-material set-submit-input mt30">
                                        <div class="form-group set-submit-box">
                                            <input type="text" name="sign-cont-no" class="form-control" id="sign-cont-no" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label" for="sign-cont-no">Mobile No</label>
                                        </div>

                                        <div class="form-group set-submit-box">
                                            <input type="email" name="sign-email" class="form-control" id="sign-email" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label" for="sign-email">Email</label>
                                        </div>

                                        <div class="form-group set-submit-box">
                                            <input type="password" name="sign-password" class="form-control" id="sign-password" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label" for="sign-password">password</label>
                                        </div>

                                        <div class="form-group set-submit-box">
                                            <div class="checkbox text-left">
                                                <label>
                                                    <input type="checkbox" value="0">I have read and agree to Elselink Policy
                                                </label>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-theme btn-subscribe">COMPLETE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script data-cfasync="false"
            src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
        </script>
        <script src="{{ asset('assets/js/jquery.2.2.3.min.js') }}">
        </script>

        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/particles.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/5c46fd1b51410568a107c606/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
            </script>
        <!--End of Tawk.to Script-->
    </body>
</html>

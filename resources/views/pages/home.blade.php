@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="theme-background search">
        <div class="container">
            <div class="row text-center">
                <div class="title col-sm-12">
                    <h2 class="text-white">search your <strong>domain</strong> name</h2>
                    <p class="sub-heading text-white col-sm-8 col-sm-offset-2">Free Email accounts and privacy protaction comes in your way</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <form class="form-group form-inline search-box" method="post" action="hosting/domainchecker.php" id="frmDomainHomepage">
                        @csrf
                        <input type="text" name="domain" class="form-control" placeholder="eg. elselink.com" autocapitalize="none" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="Required">
                        <button type="submit" class="btn btn-theme"><span>Search Domain</span></button>
                    </form>
                    
                </div>
            </div>

            <div class="row mt20">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="domain-counter text-white text-center">
                        <li>.com ₦<span class="counter">000.00</span></li>
                        <li>.net ₦<span class="counter">000.00</span></li>
                        <li>.org ₦<span class="counter">000.00</span></li>
                        <li>.ng ₦<span class="counter">000.00</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="assets/images/search/search-megnifire.png" class="search-bg-icon" alt="search image">
    </section>

    <header class="jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(assets/images/slide1.jpg);">
        <section>
            <div class="background-layer"></div>
            <div class="container slider">
                <div class="row valign-wrapper">
                    <div class="col-md-6">
                        <h1 class="text-theme">Best web Hosting starting from <span class="text-theme-alternate"> ₦0000/month</span></h1>
                        <p class="mt30 mb30">2 million people rely on our products to get their ideas online with<br> <span class="text-theme"> Dedicated Support</span></p>
                        <div class="home-btn">
                            <button type="button" class="btn btn-theme">GET STARTED NOW</button>
                            <a href="#" class="btn btn-default-theme">VIEW PACKAGES</a>
                        </div>
                    </div>

                    <div class="col-md-6 text-center ">
                        <img class="img-home" src="assets/images/home/home-layout-1.png" alt="home avtar" />
                        <div class="theme-badge home-badge text-center">
                            <span>Starting at<strong>₦<span class="counter">0000</span></strong>/Month</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <section class="theme-background search">
        <div class="container">
            <div class="row text-center">
                <div class="title col-sm-12">
                    <h2>Our Services & Products with <strong>24/7 Support</strong></h2>
                    <div class="bottom-bar mb20"></div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <div class="team-block service">
                        <div class="team-img-block">
                            <img src="svg/online.svg" class="img-team" alt="team image" />
                        <div class="team-hover">
                        </div>
                        </div>
                        <h4>Domain Registration</h4>
                        <div class="line-break"></div>
                        <p>starting from</p>
                        <div class="price-box">
                            <sup>$</sup>
                            7
                            <sup>26</sup>
                            <sub>/mo.</sub>
                        </div>
                        <div class="">
                            <span><strike>$8.99/mo</strike></span>
                            <span class="price-percent"><strong>19% OFF!</strong></span>
                        </div>
                        <div class="line-break"></div>
                        <a type="button" class="btn mt10 mb20 btn-t">Get Domain</a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="team-block service">
                        <div class="team-img-block">
                            <img src="svg/online.svg" class="img-team" alt="team image" />
                            <div class="team-hover">
                            </div>
                        </div>
                        <h4>Web Hosting</h4>
                        <div class="line-break"></div>
                        <p>starting from</p>
                        <div class="price-box">
                            <sup>$</sup>
                            7
                            <sup>26</sup>
                            <sub>/mo.</sub>
                        </div>
                        <div class="">
                            <span><strike>$8.99/mo</strike></span>
                            <span class="price-percent"><strong>19% OFF!</strong></span>
                        </div>
                        <div class="line-break"></div>
                        <a type="button" class="btn mt10 mb20 btn-t">Get Hosting</a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="team-block service">
                        <div class="team-img-block">
                            <img src="svg/online.svg" class="img-team" alt="team image" />
                            <div class="team-hover">
                            </div>
                        </div>
                        <h4>SSL Certificate</h4>
                        <div class="line-break"></div>
                        <p>starting from</p>
                        <div class="price-box">
                            <sup>$</sup>
                            7
                            <sup>26</sup>
                            <sub>/mo.</sub>
                        </div>
                        <div class="">
                            <span><strike>$8.99/mo</strike></span>
                            <span class="price-percent"><strong>19% OFF!</strong></span>
                        </div>
                        <div class="line-break"></div>
                        <a type="button" class="btn mt10 mb20 btn-t">Get SSL</a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="team-block service">
                        <div class="team-img-block">
                            <img src="svg/online.svg" class="img-team" alt="team image" />
                            <div class="team-hover">
                            </div>
                        </div>
                        <h4>Emails &amp; Office</h4>
                        <div class="line-break"></div>
                        <p>starting from</p>
                        <div class="price-box">
                            <sup>$</sup>
                            7
                            <sup>26</sup>
                            <sub>/mo.</sub>
                        </div>
                        <div class="">
                            <span><strike>$8.99/mo</strike></span>
                            <span class="price-percent"><strong>19% OFF!</strong></span>
                        </div>
                        <div class="line-break"></div>
                        <a type="button" class="btn mt10 mb20 btn-t">Get Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- <section>
        <div class="container">
        <div class="row valign-wrapper hosting">
        <div class="col-md-7 title">
        <h2>Why Choose <strong>elselink?</strong></h2>
        <p>Not sure what you need below? That's why we have hundreds of smart, friendly web pros waiting by the phone. Just call 000 000 000</p>
        <ul class="hosting-feature mt30 mb30">
        <li><span class="text-theme"><span class="counter">20 </span>% off</span> on Hosting</li>
        <li><span class="text-theme">1-Click</span> Installtion</li>
        <li>Uptime <span class="text-theme">Gurantee</span> 99.99%</li>
        <li><span class="text-theme">Unlimited</span> Web Space & Data</li>
        <li><span class="text-theme">Unlimited</span> Data Backup</li>
        <li><span class="text-theme">Unlimited</span> Scalability</li>
        </ul>
        <a href="#" class="btn btn-theme">View plan</a>
        <div class="theme-badge hosting-badge text-center hidden-xs hidden-sm">
        <span>Hosting at<strong>₦<span class="counter">000</span></strong>/Year</span>
        </div>
        </div>
        <img src="assets/images/hosting/hosting1.jpg" class="img-responsive img-hosting1 hidden-xs hidden-sm" alt="Cloud-server" />
        </div>

        </div>
        </section> -->


        <!-- <section class="theme-background getstart">
        <div class="container mt20">
        <div class="row valign-wrapper">
        <div class="col-md-10">
        <h3 class="text-white">
        Start Building Your Ideas Today! <span> Starting From</span>
        <span class="text-theme-alternate-lite"> <strong>₦<span class="counter">00.00</span></strong> / month</span>
        </h3>
        </div>
        <div class="col-md-2 text-center">
        <a href="#" class="btn btn-default-theme">GET STARTED</a>
        </div>
        </div>
        </div>
        </section> -->

        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="title col-sm-12">
                        <h2>Happy Clients <strong>TESTIMONIALS</strong></h2>
                        <div class="bottom-bar"></div>
                        <p class="mt20 mb20">“Our great customer support is why our client are with Else Inc. Friendly web pros waiting by the phone. Just call 000 000 000</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="offer-slide">
                            <div class="item">
                                <div class="valign-wrapper offer-slider">
                                    <div class="col-sm-6">
                                        <img src="assets/images/we-offer/teju.jpg" class="img-responsive" alt="testimonials" />
                                    </div>

                                    <div class="col-sm-6">
                                        <h3>Teju Babyface * * * * * *</h3>
                                        <p class="mt20 mb20">“Their great customer support is why I am with Else Inc. Friendly web pros waiting by the phone. Just call 000 000 000</p>
                                        <a href="#" class="btn btn-theme">CEO, VISUAL PROJECTS</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="valign-wrapper offer-slider">
                                    <div class="col-sm-6">
                                        <img src="assets/images/we-offer/teju.jpg" class="img-responsive" alt="testimonials" />
                                    </div>

                                    <div class="col-sm-6">
                                        <h3>Teju Babyface * * * * * *</h3>
                                        <p class="mt20 mb20">“Their great customer support is why I am with Else Inc. Friendly web pros waiting by the phone. Just call 000 000 000</p>
                                        <a href="#" class="btn btn-theme">CEO, VISIUAL PROJECTS</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="valign-wrapper offer-slider">
                                    <div class="col-sm-6">
                                        <img src="assets/images/we-offer/teju.jpg" class="img-responsive" alt="testimonials" />
                                    </div>
                                    <div class="col-sm-6">
                                        <h3>Teju Babyface * * * * * *</h3>
                                        <p class="mt20 mb20">“It's so easy and quick
                                        to get online”, friendly web pros waiting by the phone. Just call 000 000 000</p>
                                        <a href="#" class="btn btn-theme">CEO, VISIUAL PROJECTS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="theme-background getstart">
            <div class="container mt20">
                <div class="row valign-wrapper">
                    <div class="col-md-10">
                        <h3 class="text-white">
                        Start Building Your Ideas Today! <span> Starting From</span>
                        <span class="text-theme-alternate-lite"> <strong>₦<span class="counter">00.00</span></strong> / month</span>
                        </h3>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#" class="btn btn-default-theme">GET STARTED</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h3>Why go with Elselink?</h3>
                        <div class="accordion faq-accordion" id="only-one">
                            <div class="panel">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#only-one" href="#collapse1" aria-expanded="true">Support Library</a>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body desc">
                                        <div class="img col-xs-6">
                                            <img src="assets/images/blog/blog-1.png" class="faq-img img-responsive" alt="faq img" />
                                        </div>
                                        <div class="text-img col-xs-6">
                                            <p>Search for answers to common questions, browse our how-to’s or just explore all the things your products can do...Visit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div>
                                    <div class="panel-title title">
                                        <a data-toggle="collapse" data-parent="#only-one" href="#collapse2">Community</a>
                                    </div>
                                </div>

                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body desc">
                                        <div class="img col-xs-6">
                                            <img src="assets/images/blog/blog-1.png" class="faq-img img-responsive" alt="faq img" />
                                        </div>
                                        <div class="text-img col-xs-6">
                                            <p>Get real-world advice from people who’ve been there. Or help others by sharing your own ideas and experienc...Visit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div>
                                    <div class="panel-title title">
                                        <a data-toggle="collapse" data-parent="#only-one" href="#collapse3">Award Winning Support</a>
                                    </div>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body desc">
                                        <div class="img col-xs-6">
                                            <img src="assets/images/blog/blog-1.png" class="faq-img img-responsive" alt="faq img" />
                                        </div>
                                        <div class="text-img col-xs-6">
                                            <p>Thank you for choosing Elselink! Our Support Team are round the clock for your business to soar 24/7...Visit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div>
                                    <div class="panel-title title">
                                        <a data-toggle="collapse" data-parent="#only-one" href="#collapse4">Value for Money</a>
                                    </div>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body desc">
                                        <div class="img col-xs-6">
                                            <img src="assets/images/blog/blog-1.png" class="faq-img img-responsive" alt="faq img" />
                                        </div>
                                        <div class="text-img col-xs-6">
                                            <p>Thank you for choosing Elselink! The next steps to take depend on exactly what you want to...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div>
                                    <div class="panel-title title">
                                        <a data-toggle="collapse" data-parent="#only-one" href="#collapse4">Articles & Inspiration</a>
                                    </div>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body desc">
                                        <div class="img col-xs-6">
                                            <img src="assets/images/blog/blog-1.png" class="faq-img img-responsive" alt="faq img" />
                                        </div>
                                        <div class="text-img col-xs-6">
                                            <p>Our blog is overflowing with insights on everything from building your brand to how to set up your server.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 faq-slide-block">
                        <h3>Let's Get You Inspired Today!</h3>
                        <div class="faq-slide text-center">
                            <div class="item">
                                <div class="team-block">
                                    <div class="team-img-block">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/w1InlmCh3V0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <h4>Take your ideas online </h4>
                                    <p class="text-theme">Design Boss</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="team-block">
                                    <div class="team-img-block">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/K334VdmCSMQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <h4>Take your ideas online </h4>
                                    <p class="text-theme">Design Boss</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="team-block">
                                    <div class="team-img-block">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/DWqwzCTIW3Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <h4>Take your ideas online </h4>
                                    <p class="text-theme">Design Boss</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="dnld jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(assets/images/slide1.jpg);">
            <div class="background-layer-theme"></div>
            <div class="container">
                <div class="row col-sm-12">
                    <div class="col-sm-6 col-md-3">
                        <div class="download-block valign-wrapper">
                            <div class="download-icon">
                                <i class="fa fa-users"></i>
                            </div>

                            <div class="download-details">
                                <strong><span class="counter">20</span>k</strong>
                                <p>Happy Customer</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="download-block valign-wrapper">
                            <div class="download-icon">
                                <i class="fa fa-font-awesome"></i>
                            </div>
                            <div class="download-details">
                                <strong><span class="counter">985</span></strong>
                                <p>Projects Complete</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="download-block valign-wrapper">
                            <div class="download-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="download-details">
                                <strong><span class="counter">1000</span></strong>
                                <p>Domain Registered</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="download-block valign-wrapper">
                            <div class="download-icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div class="download-details">
                                <strong><span class="counter">20</span>+</strong>
                                <p>Best Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="technology">
            <div class="container">
                <div class="row valign-wrapper">
                    <div class="col-sm-6 title">
                        <h2>Your Favorite <strong>Hosting App</strong> is <span class="text-theme"><strong>One Click</strong></span> Away</h2>
                        <img src="assets/images/technology/technology-pointer.png" class="img-technology hidden-sm hidden-xs" alt="technology images" />
                    </div>

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="technology-block">
                                    <img src="assets/images/technology/technology-6.png" alt="technology images" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="technology-block">
                                    <img src="assets/images/technology/technology-5.png" alt="technology images" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="technology-block">
                                    <img src="assets/images/technology/technology-4.png" alt="technology images" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="technology-block">
                                    <img src="assets/images/technology/technology-3.png" alt="technology images" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="technology-block">
                                    <img src="assets/images/technology/technology-2.png" alt="technology images" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="technology-block">
                                    <img src="assets/images/technology/technology-1.png" alt="technology images" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="theme-background-alternate-lite">
            <div class="container mt20">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="client-slide">
                            <div class="item">
                                <img src="assets/images/award/logo1.png" alt="client images" />
                            </div>
                            <div class="item">
                                <img src="assets/images/award/logo2.png" alt="client images" />
                            </div>
                            <div class="item">
                                <img src="assets/images/award/logo3.png" alt="client images" />
                            </div>
                            <div class="item">
                                <img src="assets/images/award/logo1.png" alt="client images" />
                            </div>
                            <div class="item">
                                <img src="assets/images/award/logo4.png" alt="client images" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

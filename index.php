<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mazel - Multiprapose Html template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Search Overlay Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="ion ion-ios-close-empty"></i></span>
        <form role="search" id="searchform" action="/search" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="ion ion-ios-search"></i></button>
        </form>
    </div>
    <!-- End Search Overlay Menu -->

    <!-- Sidemenu -->
    <?php include("includes/menu.php"); ?>
    <!--End Sidemenu -->

    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- HEADER -->
        <?php include("includes/header.php"); ?>
        <!-- END HEADER -->

        <!-- CONTENT-->

        <!-- Intro Section -->
        <section id="intro">
            <!-- Hero Slider Section -->
            <div class="flexslider fullscreen-carousel hero-slider-1 ">
                <ul class="slides">

                    <!--Slide-->
                    <li data-slide="light-slide">
                        <div class="slide-bg-image overlay-light parallax parallax-section1" data-background-img="img/full/11.jpg">
                            <div class="js-Slide-fullscreen-height container">
                                <div class="intro-content">
                                    <div class="intro-content-inner">
                                        <h2 class="h2">Welcome to Mazel</h2>
                                        <p class="lead">We carry a passion for performance marketing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Slide-->
                    <li data-slide="dark-slide">
                        <div class="slide-bg-image overlay-dark dark-bg parallax parallax-section1" data-background-img="img/full/20.jpg">
                            <div class="js-Slide-fullscreen-height container">
                                <div class="intro-content">
                                    <div class="intro-content-inner">
                                        <h2 class="h2">Flexible & Customizable</h2>
                                        <p class="lead">We carry a passion for performance marketing</p>
                                        <br />
                                        <div><a class="btn btn-md btn-white-line xs-hidden">Read More</a><span class="btn-space-10 xs-hidden"></span><a class="btn btn-md btn-white">Learn More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Slide-->
                    <li data-slide="light-slide">
                        <div class="slide-bg-image overlay-light parallax parallax-section1" data-background-img="img/full/02.jpg">
                            <div class="js-Slide-fullscreen-height container">
                                <div class="intro-content">
                                    <div class="intro-content-inner">
                                        <h2 class="h2">One & Mutlipage Theme</h2>
                                        <p class="lead">We carry a passion for performance marketing</p>
                                        <br />
                                        <div><a class="btn btn-md btn-black-line">Read More</a><span class="btn-space-10 xs-hidden"></span><a class="btn btn-md btn-black xs-hidden">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Slide-->
                    <li data-slide="dark-slide">
                        <div class="slide-bg-image overlay-dark dark-bg parallax parallax-section1" data-background-img="img/full/18.jpg">
                            <div class="js-Slide-fullscreen-height container">
                                <div class="intro-content">
                                    <div class="intro-content-inner">
                                        <h2 class="h2">Fully Responsive</h2>
                                        <p class="lead">We carry a passion for performance marketing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- End Hero Slider Section -->
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- About Section -->
        <section id="about" class="pt pt-sm-80">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"></div>
                    <h2>
                        <span class="color">We are Mazel.</span> A Digitel<br />
                        Agency from the city of Berlin
                    </h2>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Work Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                    <ul class="container-filter categories-filter">
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".branding">Branding</a></li>
                        <li><a class="categories" data-filter=".design">Design</a></li>
                        <li><a class="categories" data-filter=".photo">Photo</a></li>
                        <li><a class="categories" data-filter=".coffee">coffee</a></li>
                    </ul>
                </div>
                <!-- End work Filter -->
                <div class="row container-masonry nf-col-3">

                    <div class="nf-item branding coffee spacing">
                        <div class="item-box">
                            <a href="portfolio-single1.html">
                                <img alt="1" src="img/portfolio/14.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Consequat massa quis</h5>
                                        <p class="white">Branding, Design</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item photo spacing">
                        <div class="item-box">
                            <a href="portfolio-single2.html">
                                <img alt="1" src="img/portfolio/2.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Bookmarksgrove right at</h5>
                                        <p class="white">Branding, Design, Coffee</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item branding photo spacing">
                        <div class="item-box">
                            <a href="portfolio-single3.html">
                                <img alt="1" src="img/portfolio/17.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">A small river named</h5>
                                        <p class="white">Branding, Design</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>



                    <div class="nf-item design spacing">
                        <div class="item-box">
                            <a href="portfolio-single4.html">
                                <img alt="1" src="img/portfolio/34.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Rethoric question ran over</h5>
                                        <p class="white">Branding, Design, Coffee</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item photo spacing">
                        <div class="item-box">
                            <a href="portfolio-single1.html">
                                <img alt="1" src="img/portfolio/32.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Because there were thousands</h5>
                                        <p class="white">Branding, Design, Coffee</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item photo spacing">
                        <div class="item-box">
                            <a href="portfolio-single5-slider.html">
                                <img alt="1" src="img/portfolio/21.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Ran over her cheek</h5>
                                        <p class="white">Branding, Slider</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item design spacing">
                        <div class="item-box">
                            <a href="portfolio-single6-video.html">
                                <img alt="1" src="img/portfolio/22.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Oxmox advised her</h5>
                                        <p class="white">Branding, Video</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item coffee spacing">
                        <div class="item-box">
                            <a href="portfolio-single7-youtube.html">
                                <img alt="1" src="img/portfolio/29.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Subline of her own road</h5>
                                        <p class="white">Branding, Youtube</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item design spacing">
                        <div class="item-box">
                            <a href="portfolio-single8-vimeo.html">
                                <img alt="1" src="img/portfolio/23.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">But the Little Blind</h5>
                                        <p class="white">Branding, Vimeo</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item design spacing">
                        <div class="item-box">
                            <a href="portfolio-single1.html">
                                <img alt="1" src="img/portfolio/24.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Even the all-powerful</h5>
                                        <p class="white">Branding, Design</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item photo spacing">
                        <div class="item-box">
                            <a href="portfolio-single2.html">
                                <img alt="1" src="img/portfolio/25.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Italic Mountains</h5>
                                        <p class="white">Branding, Coffee</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item photo spacing">
                        <div class="item-box">
                            <a href="portfolio-single4.html">
                                <img alt="1" src="img/portfolio/33.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">control about the blind</h5>
                                        <p class="white">Branding, Design</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item branding coffee spacing">
                        <div class="item-box">
                            <a href="portfolio-single5-slider.html">
                                <img alt="1" src="img/portfolio/27.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">The Big Oxmox advised</h5>
                                        <p class="white">Branding, Slider</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item branding coffee spacing">
                        <div class="item-box">
                            <a href="portfolio-single1.html">
                                <img alt="1" src="img/portfolio/18.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">The Big Oxmox advised</h5>
                                        <p class="white">Branding, Slider</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item branding design spacing">
                        <div class="item-box">
                            <a href="portfolio-single2.html">
                                <img alt="1" src="img/portfolio/4.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">The Big Oxmox advised</h5>
                                        <p class="white">Branding, Slider</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item branding coffee spacing">
                        <div class="item-box">
                            <a href="portfolio-single3.html">
                                <img alt="1" src="img/portfolio/30.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">The Big Oxmox advised</h5>
                                        <p class="white">Branding, Slider</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item branding design spacing">
                        <div class="item-box">
                            <a href="portfolio-single4.html">
                                <img alt="1" src="img/portfolio/10.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">The Big Oxmox advised</h5>
                                        <p class="white">Branding, Slider</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Work Section -->

        <!-- Testimonials -->
        <section id="testimonial" class="pb pb-sm-80">
            <div class="container">
                <div class="owl-carousel testimonial-carousel nf-carousel-theme">
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">" I got a dummy for Christmas and started teaching myself. I got books and records and sat in front of the practising. I did my first show in the third grade and just kept going. "</p>
                            <h6 class="quote-author">Jeff Dunham <span style="font-weight: 400;">( Appel Studio )</span></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">" It's true, you can never eat a pet you name. And anyway, I did my first show in the third grade it would be like a ventriloquist eating his dummy. "</p>
                            <h6 class="quote-author">Alexander Theroux <span style="font-weight: 400;">( USA )</span></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">" We're not leaving here without Buster, man. Leave no crash-test dummy behind! "</p>
                            <h6 class="quote-author">Adam Savage <span style="font-weight: 400;">( Artist )</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials -->
        <div class="spacer-60"></div>
        <!-- END CONTENT ---------------------------------------------------------------------------->

        <!-- FOOTER -->
        <footer class="footer pt-80">
            <div class="container">
                <div class="row mb-60">
                    <!-- Logo -->
                    <div class="col-md-3 col-sm-3 col-xs-12 mb-xs-30">
                        <a class="footer-logo" href="home.html">
                            <img src="img/logo-black.png" /></a>
                    </div>
                    <!-- Logo -->

                    <!-- Newsletter -->
                    <div class="col-md-4 col-sm-5 col-xs-12 mb-xs-30">
                        <div class="newsletter">
                            <form>
                                <input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email">
                                <button class="newsletter-btn btn btn-xs btn-white" type="submit" value=""><i class="fa fa-angle-right mr-0"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- End Newsletter -->

                    <!-- Social -->
                    <div class="col-md-3 col-md-offset-2 col-sm-4 col-xs-12">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Social -->
                </div>
                <!--Footer Info -->
                <div class="row footer-info mb-60">
                    <div class="col-md-3 col-sm-12 col-xs-12 mb-sm-30">
                        <p class="mb-xs-0">Our ante tincidunt tempus, Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                        <a class="btn-link-a" href="about-1.html">Read More</a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30 mb-xs-0">
                        <ul class="link">
                            <li><a href="blog-grid-3col.html">Blog</a></li>
                            <li><a href="portfolio-grid-3col.html">Portfolio</a></li>
                            <li><a href="login-register.html">Login & Signup</a></li>
                            <li><a href="faq-1.html">FAQ</a></li>
                            <li><a href="about-1.html">About</a></li>
                            <li><a href="service-1.html">Service</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30">
                        <ul class="link">
                            <li><a href="contact-1.html">Contact Us</a></li>
                            <li><a href="shop-checkout.html">Shopping Cart</a></li>
                            <li><a href="404-error-1.html">404 Error</a></li>
                            <li><a href="home.html">Home</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <p>502, DieSachbearbeiter, Schönhauser Allee, 167c10435 Berlin,Germany.</p>
                        <ul class="link-small">
                            <li><a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>yourname@domain.com</a></li>
                            <li><a><i class="fa fa-phone left"></i>+40 (0) 012 345 6789</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Footer Info -->
            </div>

            <hr />

            <!-- Copyright Bar -->
            <section class="copyright ptb-60">
                <div class="container">
                    <p class="">
                        © 2015 <a><b>Mazel Template</b></a>. All Rights Reserved.
                        <br />
                        Template  by <a target="_blank" href="http://nileforest.com/"><b>nileforest</b></a>
                    </p>
                </div>
            </section>
            <!-- End Copyright Bar -->

        </footer>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->


    <!-- JS -->

    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>


</body>
</html>

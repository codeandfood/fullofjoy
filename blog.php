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

    <?php include("favi.php"); ?>

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
        <!-- End Header -->

        <!-- CONTENT -->
        <!-- Intro Section -->
        <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="img/full/16.jpg">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Blog</h2>
                    <div class="page-breadcrumb">
                        <a>Home</a>/<a>Blog</a>/<span>2 Columns</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Intro Section -->
        
        <!-- Blog Post Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
                <!-- Post Item -->
                <div class="row container-grid">

                    <div class="col-md-6 col-sm-6 col-xs-12 nf-item spacing-grid">
                        <div class="blog-post">
                            <div class="post-media">
                                <img class="item-container" src="img/full/10.jpg" alt="1" />
                            </div>
                            <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>March 16, 2015</span></div>
                            <div class="post-header">
                                <h5><a href="blog-single-image-post.html">Maecenas nec odio ante varcy tincidunt</a></h5>
                            </div>
                            <div class="post-entry">
                                <p>Blandit vel, luctus pulvinar, hendrerit id, Maecenas tempus, tellus eget lorem. Maecenas nec odio et is ante.</p>
                            </div>
                            <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                            <div class="post-more-link pull-right"><a href="blog-single-image-post.html">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 nf-item spacing-grid">
                        <div class="blog-post">
                            <div class="post-media">
                                <div class="owl-carousel item1-carousel nf-carousel-theme">
                                    <div class="item">
                                        <img src="img/full/26.jpg" alt="" />
                                    </div>
                                    <div class="item">
                                        <img src="img/full/04.jpg" alt="" />
                                    </div>
                                    <div class="item">

                                        <img src="img/full/28.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>March 16, 2015</span></div>
                            <div class="post-header">
                                <h5><a href="blog-single-slider-post.html">Maecenas nec odio ante varcy tincidunt</a></h5>
                            </div>
                            <div class="post-entry">
                                <p>Blandit vel, luctus pulvinar, hendrerit id, Maecenas tempus, tellus eget lorem. Maecenas nec odio et is ante.</p>
                            </div>
                            <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                            <div class="post-more-link pull-right"><a href="blog-single-slider-post.html">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 nf-item spacing-grid">
                        <div class="blog-post">
                            <div class="post-media">
                                <video class="video" style="width: 100%;" width="" height="" id="player2" preload="auto" poster="media/echo-hereweare.jpg" controls="controls">
                                    <!-- MP4 source must come first for iOS -->
                                    <source type="video/mp4" src="media/video1.mp4" />
                                    <!-- WebM for Firefox 4 and Opera -->
                                    <source type="video/webm" src="media/video1.webm" />
                                    <!-- OGG for Firefox 3 -->
                                    <source type="video/ogg" src="media/video1.ogv" />
                                </video>
                            </div>
                            <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>March 16, 2015</span></div>
                            <div class="post-header">
                                <h5><a href="blog-single-video-post.html">Maecenas nec odio ante varcy tincidunt</a></h5>
                            </div>
                            <div class="post-entry">
                                <p>Blandit vel, luctus pulvinar, hendrerit id, Maecenas tempus, tellus eget lorem. Maecenas nec odio et is ante.</p>
                            </div>
                            <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                            <div class="post-more-link pull-right"><a href="blog-single-video-post.html">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 nf-item spacing-grid">
                        <div class="blog-post">
                            <div class="post-media">
                                <iframe src="http://player.vimeo.com/video/60096045?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="1150" height="650" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>March 16, 2015</span></div>
                            <div class="post-header">
                                <h5><a href="blog-single-vimeo-post.html">Maecenas nec odio ante varcy tincidunt</a></h5>
                            </div>
                            <div class="post-entry">
                                <p>Blandit vel, luctus pulvinar, hendrerit id, Maecenas tempus, tellus eget lorem. Maecenas nec odio et is ante.</p>
                            </div>
                            <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                            <div class="post-more-link pull-right"><a href="blog-single-vimeo-post.html">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 nf-item spacing-grid">
                        <div class="blog-post">
                            <div class="post-media">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/S_kXyWhBB10" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>March 16, 2015</span></div>
                            <div class="post-header">
                                <h5><a href="blog-single-youtube-post.html">Maecenas nec odio ante varcy tincidunt</a></h5>
                            </div>
                            <div class="post-entry">
                                <p>Blandit vel, luctus pulvinar, hendrerit id, Maecenas tempus, tellus eget lorem. Maecenas nec odio et is ante.</p>
                            </div>
                            <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                            <div class="post-more-link pull-right"><a href="blog-single-youtube-post.html">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 nf-item spacing-grid">
                        <div class="blog-post">
                            <div class="post-media">
                                <blockquote>We're not leaving here without Buster, man. Leave no crash-test dummy behind, We're not leaving here without Buster, man. Leave no crash-test dummy behind nihil impedit quo minus id quod maxime placeat facere!</blockquote>
                            </div>
                            <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>March 16, 2015</span></div>
                            <div class="post-header">
                                <h5><a href="blog-single-quote-post.html">Maecenas nec odio ante varcy tincidunt</a></h5>
                            </div>
                            <div class="post-entry">
                                <p>Blandit vel, luctus pulvinar, hendrerit id, Maecenas tempus, tellus eget lorem. Maecenas nec odio et is ante.</p>
                            </div>
                            <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                            <div class="post-more-link pull-right"><a href="blog-single-quote-post.html">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 nf-item spacing-grid">
                        <div class="blog-post">
                            <div class="post-media">
                                <img class="item-container" src="img/full/10.jpg" alt="1" />
                            </div>
                            <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>March 16, 2015</span></div>
                            <div class="post-header">
                                <h5><a href="blog-single-image-post.html">Maecenas nec odio ante varcy tincidunt</a></h5>
                            </div>
                            <div class="post-entry">
                                <p>Blandit vel, luctus pulvinar, hendrerit id, Maecenas tempus, tellus eget lorem. Maecenas nec odio et is ante.</p>
                            </div>
                            <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                            <div class="post-more-link pull-right"><a href="blog-single-image-post.html">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 nf-item spacing-grid">
                        <div class="blog-post">
                            <div class="post-media">
                                <audio class="audio" src="media/track1.mp3" type="audio/mp3" controls="controls"></audio>
                            </div>
                            <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>March 16, 2015</span></div>
                            <div class="post-header">
                                <h5><a href="blog-single-audio-post.html">Maecenas nec odio ante varcy tincidunt</a></h5>
                            </div>
                            <div class="post-entry">
                                <p>Blandit vel, luctus pulvinar, hendrerit id, Maecenas tempus, tellus eget lorem. Maecenas nec odio et is ante.</p>
                            </div>
                            <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                            <div class="post-more-link pull-right"><a href="blog-single-audio-post.html">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                        </div>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Pagination Nav -->
                <div class="pagination-nav mt-60 mt-xs-30">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- End Pagination Nav -->
            </div>
        </section>
        <!-- End Blog Post Section -->

        <!-- End CONTENT -->

        <!-- FOOTER -->
        <?php include("includes/footer.php"); ?>
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
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
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
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>


</body>
</html>

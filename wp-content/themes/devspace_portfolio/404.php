<?php get_header() ?>
<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
<a href="#main-wrapper" id="backto-top" class="back-to-top">
    <i class="far fa-angle-double-up"></i>
</a>

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->

<div class="my_switcher d-none d-lg-block">
    <ul>
        <li title="Light Mode">
            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                <i class="fal fa-lightbulb-on"></i>
            </a>
        </li>
        <li title="Dark Mode">
            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                <i class="fas fa-moon"></i>
            </a>
        </li>
    </ul>
</div>

<div id="main-wrapper" class="main-wrapper">
    <!--=====================================-->
    <!--=           404 Area Start          =-->
    <!--=====================================-->
    <section class="error-page onepage-screen-area onepage-screen-area-full">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <h2 class="title">Page not found</h2>
                        <p>This page was not found. <br />You may have mistyped the address or the page may have moved.</p>
                        <a href="<?= home_url() ?>" class="axil-btn btn-fill-primary">Go Back</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="400">
                        <img src="<?= get_template_directory_uri() ?>/assets/media/others/404.png" alt="404">
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-27.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="<?= get_template_directory_uri() ?>/assets/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </section>


    <!--=====================================-->
    <!--=       Offcanvas Menu Area       	=-->
    <!--=====================================-->
    <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="#" class="side-nav-search-form">
                <div class="form-group">
                    <input type="text" class="search-field" name="search-field" placeholder="Search...">
                    <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <div class="row ">
                <div class="col-lg-5 col-xl-6">
                    <ul class="main-navigation list-unstyled">
                        <li><a href="index-1.html">Digital Agency</a></li>
                        <li><a href="index-3.html">Creative Agency</a></li>
                        <li><a href="index-4.html">Personal Portfolio</a></li>
                        <li><a href="index-5.html">Home Startup</a></li>
                        <li><a href="index-6.html">Corporate Agency</a></li>
                    </ul>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="contact-info-wrap">
                        <div class="contact-inner">
                            <address class="address">
                                <span class="title">Contact Information</span>
                                <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                            </address>
                            <address class="address">
                                <span class="title">We're Available 24/7. Call Now.</span>
                                <a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                    456-2790</a>
                                <a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                    255-53333</a>
                            </address>
                        </div>
                        <div class="contact-inner">
                            <h5 class="title">Find us here</h5>
                            <div class="contact-social-share">
                                <ul class="social-share list-unstyled">
                                    <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
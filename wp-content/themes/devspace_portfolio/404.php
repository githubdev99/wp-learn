<?php get_header() ?>
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
</div>
<?php get_footer() ?>
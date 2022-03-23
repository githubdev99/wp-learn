<?php get_header() ?>
<!--=====================================-->
<!--=        Banner Area Start          =-->
<!--=====================================-->
<section class="banner banner-style-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <span class="subtitle" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100"><?= get_field('full_name', 'options') ?></span>
                    <h1 class="title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200"><?= get_field('profession', 'options') ?></h1>
                    <div class="btn-group" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
                        <?php foreach (get_field('social_media', 'options') as $key_social_media) : ?>
                            <?php if (stripos($key_social_media['name'], 'github') !== false) : ?>
                                <a href="<?= $key_social_media['link']['url'] ?>" class="axil-btn btn-fill-primary btn-large" target="<?= $key_social_media['link']['target'] ?>">Latest Work On <?= $key_social_media['name'] ?></a>
                            <?php endif ?>
                        <?php endforeach ?>
                        <a href="#contact-area" class="about-btn">Contact Me</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-thumbnail">
                    <div class="large-thumb" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                        <img class="paralax-image" src="<?= get_field('banner_thumbnail')['sizes']['large'] ?>" alt="<?= get_field('banner_thumbnail')['alt'] ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="list-unstyled shape-group-20">
        <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
            <img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-32.png" alt="Bubble">
        </li>
        <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
            <img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-33.png" alt="Bubble">
        </li>
        <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
            <img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-14.png" alt="Bubble">
        </li>
        <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
            <img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-4.png" alt="Bubble">
        </li>
        <li class="shape shape-6" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
            <img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-30.png" alt="Bubble">
        </li>
        <li class="shape shape-7" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
            <img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-31.png" alt="Bubble">
        </li>
        <li class="shape shape-8 marque-images"></li>
    </ul>
</section>
<!--=====================================-->
<!--=        Project Area Start         =-->
<!--=====================================-->
<section class="section section-padding-equal bg-color-dark">
    <div class="container">
        <div class="section-heading heading-light-left">
            <h2 class="title">Riwayat Projek</h2>
            <p>Berikut beberapa projek yang sudah pernah saya kerjakan</p>
        </div>
        <div class="row row-45">
            <?php foreach (get_field('project_section') as $key_project_section) : ?>
                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800">
                    <div class="project-grid project-style-2">
                        <div class="thumbnail">
                            <a href="<?= $key_project_section['link']['url'] ?>" target="<?= $key_project_section['link']['target'] ?>">
                                <img src="<?= $key_project_section['image']['sizes']['large'] ?>" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <span class="subtitle"><?= implode(', ', array_column($key_project_section['tag'], 'name')) ?></span>
                            <h3 class="title"><a href="<?= $key_project_section['link']['url'] ?>" target="<?= $key_project_section['link']['target'] ?>"><?= $key_project_section['name'] ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <ul class="list-unstyled shape-group-10">
        <li class="shape shape-1"><img src="<?= get_template_directory_uri() ?>/assets/media/others/circle-1.png" alt="Circle"></li>
        <li class="shape shape-2"><img src="<?= get_template_directory_uri() ?>/assets/media/others/line-3.png" alt="Circle"></li>
        <li class="shape shape-3"><img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-5.png" alt="Circle"></li>
    </ul>
</section>
<!--=====================================-->
<!--=        Project Area Start         =-->
<!--=====================================-->
<section class="section section-padding pb--80 pb_lg--40 pb_md--20 pb_sm--0">
    <div class="container">
        <div class="section-heading heading-left">
            <h2 class="title">Riwayat Pekerjaan</h2>
        </div>
        <div class="row row-45">
            <div class="col-md-6" data-sal="slide-up" data-sal-duration="800">
                <div class="project-grid project-style-2">
                    <div class="thumbnail">
                        <a href="single-portfolio.html">
                            <img src="<?= get_template_directory_uri() ?>/assets/media/project/project-10.png" alt="project">
                        </a>
                    </div>
                    <div class="content">
                        <span class="subtitle">2021</span>
                        <h3 class="title"><a href="single-portfolio.html">Product photography</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                <div class="project-grid project-style-2">
                    <div class="thumbnail">
                        <a href="single-portfolio.html">
                            <img src="<?= get_template_directory_uri() ?>/assets/media/project/project-11.png" alt="project">
                        </a>
                    </div>
                    <div class="content">
                        <span class="subtitle">2020</span>
                        <h3 class="title"><a href="single-portfolio.html">Illustration</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=        Brand Area Start       	=-->
<!--=====================================-->
<section class="section section-padding bg-color-dark">
    <div class="container">
        <div class="section-heading heading-light-left">
            <span class="subtitle">Top Clients</span>
            <h2 class="title">We’ve built solutions for...</h2>
            <p>Design anything from simple icons to fully featured websites and applications.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500">
                <div class="brand-grid active">
                    <img src="<?= get_template_directory_uri() ?>/assets/media/brand/brand-1.png" alt="Brand">
                </div>
            </div>
            <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                <div class="brand-grid">
                    <img src="<?= get_template_directory_uri() ?>/assets/media/brand/brand-2.png" alt="Brand">
                </div>
            </div>
            <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200">
                <div class="brand-grid">
                    <img src="<?= get_template_directory_uri() ?>/assets/media/brand/brand-3.png" alt="Brand">
                </div>
            </div>
            <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <div class="brand-grid">
                    <img src="<?= get_template_directory_uri() ?>/assets/media/brand/brand-4.png" alt="Brand">
                </div>
            </div>
            <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400">
                <div class="brand-grid">
                    <img src="<?= get_template_directory_uri() ?>/assets/media/brand/brand-5.png" alt="Brand">
                </div>
            </div>
            <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500">
                <div class="brand-grid">
                    <img src="<?= get_template_directory_uri() ?>/assets/media/brand/brand-6.png" alt="Brand">
                </div>
            </div>
            <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600">
                <div class="brand-grid">
                    <img src="<?= get_template_directory_uri() ?>/assets/media/brand/brand-7.png" alt="Brand">
                </div>
            </div>
            <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                <div class="brand-grid">
                    <img src="<?= get_template_directory_uri() ?>/assets/media/brand/brand-8.png" alt="Brand">
                </div>
            </div>
        </div>
    </div>
    <ul class="list-unstyled shape-group-10">
        <li class="shape shape-1"><img src="<?= get_template_directory_uri() ?>/assets/media/others/line-9.png" alt="Circle"></li>
    </ul>
</section>
<!--=====================================-->
<!--=       Testimonial Area Start      =-->
<!--=====================================-->
<!-- <section class="section section-padding-equal">
    <div class="container">
        <div class="section-heading heading-left">
            <span class="subtitle">Testimonial</span>
            <h2 class="title">From getting started</h2>
            <p>Nulla facilisi. Nullam in magna id dolor blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
        </div>
        <div class="row">
            <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                <div class="testimonial-grid">
                    <span class="social-media"><img src="<?= get_template_directory_uri() ?>/assets/media/icon/google-2.png" alt="google"></span>
                    <p>“ Donec metus lorem, vulputate
                        at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                    <div class="author-info">
                        <div class="thumb">
                            <img src="<?= get_template_directory_uri() ?>/assets/media/testimonial/testimonial-1.png" alt="Google Review">
                        </div>
                        <div class="content">
                            <span class="name">Darrell Steward</span>
                            <span class="designation">Executive Chairman</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                <div class="testimonial-grid">
                    <span class="social-media"><img src="<?= get_template_directory_uri() ?>/assets/media/icon/fb-2.png" alt="Facebook"></span>
                    <p>“ Donec metus lorem, vulputate
                        at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                    <div class="author-info">
                        <div class="thumb">
                            <img src="<?= get_template_directory_uri() ?>/assets/media/testimonial/testimonial-2.png" alt="Google Review">
                        </div>
                        <div class="content">
                            <span class="name">Savannah Nguyen</span>
                            <span class="designation">Executive Chairman</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
                <div class="testimonial-grid">
                    <span class="social-media"><img src="<?= get_template_directory_uri() ?>/assets/media/icon/yelp-2.png" alt="Yelp"></span>
                    <p>“ Donec metus lorem, vulputate
                        at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                    <div class="author-info">
                        <div class="thumb">
                            <img src="<?= get_template_directory_uri() ?>/assets/media/testimonial/testimonial-3.png" alt="Google Review">
                        </div>
                        <div class="content">
                            <span class="name">Floyd Miles</span>
                            <span class="designation">Executive Chairman</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="shape-group-4 list-unstyled">
        <li class="shape-1"><img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-1.png" alt="Bubble"></li>
    </ul>
</section> -->
<!-- /container -->
<?php get_footer() ?>
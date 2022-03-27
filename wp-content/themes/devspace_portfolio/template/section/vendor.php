<section class="section section-padding bg-color-dark">
    <div class="container">
        <div class="section-heading heading-light-left">
            <h2 class="title">Riwayat Mitra</h2>
            <p>Pernah bekerjasama dengan beberapa mitra</p>
        </div>
        <div class="row">
            <?php foreach ($args['get_vendor'] as $key_get_vendor) : ?>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <?php get_template_part("/template/component/card", "vendor", [
                        'type' => $key_get_vendor['type'],
                        'url' => $key_get_vendor['url'],
                        'url_target' => $key_get_vendor['url_target'],
                        'image_url' => $key_get_vendor['image_url'],
                        'image_alt' => $key_get_vendor['image_alt'],
                        'name' => $key_get_vendor['name'],
                    ]) ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <ul class="list-unstyled shape-group-10">
        <li class="shape shape-1"><img src="<?= get_template_directory_uri() ?>/assets/media/others/line-9.png" alt="Circle"></li>
    </ul>
</section>
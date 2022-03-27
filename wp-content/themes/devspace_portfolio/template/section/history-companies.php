<section class="section section-padding pb--80 pb_lg--40 pb_md--20 pb_sm--0">
    <div class="container">
        <div class="section-heading heading-left">
            <h2 class="title">Riwayat Pekerjaan</h2>
            <p>Berikut beberapa perjalanan karir saya</p>
        </div>
        <div class="row row-45">
            <?php foreach ($args['get_history_companies'] as $key_get_history_companies) : ?>
                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800">
                    <?php get_template_part("/template/component/card", "project", [
                        'url' => $key_get_history_companies['url'],
                        'url_target' => $key_get_history_companies['url_target'],
                        'image_url' => $key_get_history_companies['image_url'],
                        'image_alt' => $key_get_history_companies['image_alt'],
                        'project_subtitle' => $key_get_history_companies['project_subtitle'],
                        'project_title' => $key_get_history_companies['project_title'],
                    ]) ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
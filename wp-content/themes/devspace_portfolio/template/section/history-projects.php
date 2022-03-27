<section class="section section-padding-equal bg-color-dark">
    <div class="container">
        <div class="section-heading heading-light-left">
            <h2 class="title">Riwayat Projek</h2>
            <p>Berikut beberapa projek yang sudah pernah saya kerjakan</p>
        </div>
        <div class="axil-isotope-wrapper">
            <div class="isotope-button isotope-project-btn">
                <button data-filter="*" class="is-checked"><span class="filter-text text-white">Semua Projek</span></button>

                <?php foreach ($args['filter_project_section'] as $key_filter_project_section) : ?>
                    <button data-filter=".<?= strtolower($key_filter_project_section) ?>"><span class="filter-text text-white"><?= $key_filter_project_section ?></span></button>
                <?php endforeach ?>
            </div>
            <div class="row isotope-list">
                <?php foreach ($args['data_project_section'] as $key_data_project_section) : ?>
                    <div class="col-xl-4 col-lg-3 col-md-6 project <?= strtolower($key_data_project_section['type']) ?>">
                        <?php get_template_part("/template/component/card", "project", [
                            'url' => $key_data_project_section['url'],
                            'url_target' => $key_data_project_section['url_target'],
                            'image_url' => $key_data_project_section['image_url'],
                            'image_alt' => $key_data_project_section['image_alt'],
                            'project_subtitle' => $key_data_project_section['project_subtitle'],
                            'project_title' => $key_data_project_section['project_title'],
                        ]) ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <ul class="list-unstyled shape-group-10">
        <li class="shape shape-1"><img src="<?= get_template_directory_uri() ?>/assets/media/others/circle-1.png" alt="Circle"></li>
        <li class="shape shape-2"><img src="<?= get_template_directory_uri() ?>/assets/media/others/line-3.png" alt="Circle"></li>
        <li class="shape shape-3"><img src="<?= get_template_directory_uri() ?>/assets/media/others/bubble-5.png" alt="Circle"></li>
    </ul>
</section>
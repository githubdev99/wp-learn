<section class="section section-padding-equal bg-color-dark">
    <div class="container">
        <div class="section-heading heading-light-left">
            <h2 class="title">Riwayat Projek</h2>
            <p>Berikut beberapa projek yang sudah pernah saya kerjakan</p>
        </div>
        <div class="row row-45">
            <?php foreach (get_field('project_section') as $key_project_section) : ?>
                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800">
                    <?php get_template_part("/template/component/card", "project", $args = [
                        'url' => $key_project_section['link']['url'],
                        'url_target' => $key_project_section['link']['target'],
                        'image_url' => $key_project_section['image']['sizes']['large'],
                        'image_alt' => $key_project_section['image']['alt'],
                        'project_tag' => array_column($key_project_section['tag'], 'name'),
                        'project_name' => $key_project_section['name'],
                    ]) ?>
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
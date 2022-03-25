<section class="section section-padding pb--80 pb_lg--40 pb_md--20 pb_sm--0">
    <div class="container">
        <div class="section-heading heading-left">
            <h2 class="title">Riwayat Pekerjaan</h2>
            <p>Berikut beberapa perjalanan karir saya</p>
        </div>
        <div class="row row-45">
            <?php foreach (get_field('company_section') as $key_company_section) : ?>
                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800">
                    <?php get_template_part("/template/component/card", "project", [
                        'url' => $key_company_section['link']['url'],
                        'url_target' => $key_company_section['link']['target'],
                        'image_url' => $key_company_section['image']['sizes']['large'],
                        'image_alt' => $key_company_section['image']['alt'],
                        'project_subtitle' => $key_company_section['job'],
                        'project_title' => $key_company_section['name'],
                    ]) ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
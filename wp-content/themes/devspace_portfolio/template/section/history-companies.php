<section class="section section-padding pb--80 pb_lg--40 pb_md--20 pb_sm--0">
    <div class="container">
        <div class="section-heading heading-left">
            <h2 class="title">Riwayat Pekerjaan</h2>
            <p>Berikut beberapa perjalanan karir saya</p>
        </div>
        <div class="row row-45">
            <?php foreach (get_field('project_section') as $key_company_section) : ?>
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
            <?php endforeach ?>
        </div>
    </div>
</section>
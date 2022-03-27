<!-- Javascripts -->
<?php if (!is_404()) : ?>
    <!--=====================================-->
    <!--=        Contact Area Start       	=-->
    <!--=====================================-->
    <section class="section-padding" id="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="1000">
                    <div class="contact-address mb--30">
                        <div class="section-heading heading-light-left mb-0">
                            <span class="subtitle">Butuh seorang <?= get_field('profession', 'options') ?>?</span>
                            <h2 class="title text-black">Yuk kerjasama</h2>
                        </div>
                        <div class="address-list">
                            <div class="address">
                                <h6 class="title text-muted">Email</h6>
                                <p><a href="mailto:<?= get_field('email', 'options') ?>" target="_blank" class="text-black"><?= get_field('email', 'options') ?></a></p>
                            </div>
                            <div class="address">
                                <h6 class="title text-muted">Alamat</h6>
                                <p class="text-black"><?= get_field('address', 'options') ?></p>
                            </div>
                            <div class="address">
                                <h6 class="title text-muted">No. Telepon</h6>
                                <p><a href="tel:<?= get_field('phone_number', 'options') ?>" target="_blank" class="text-black"><?= get_field('phone_number', 'options') ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                    <div class="contact-form-box mb--30">
                        <h3 class="title">Kontak saya disini</h3>
                        <form method="POST" action="" class="axil-contact-form">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="contact-name" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="contact-email" placeholder="namaemailmu@mail.com">
                            </div>
                            <div class="form-group mb--40">
                                <label>Bagaimana saya bisa membantu kamu?</label>
                                <textarea name="contact-message" id="message" class="form-control textarea" cols="30" rows="6"></textarea>
                            </div>
                            <div class="form-group text-end">
                                <button type="submit" class="axil-btn btn-fill-primary w-auto btn-primary" name="submit-btn">SEND</button>
                            </div>
                            <input type="hidden" class="form-control" name="contact-company" value="Null">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Footer Area Start       	=-->
    <!--=====================================-->
    <footer class="footer-area footer-dark">
        <div class="container">
            <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                <div class="footer-copyright">
                    <span class="copyright-text"><i class="fas fa-copyright"></i> <?= date('Y') ?>. All rights reserved</span>
                </div>
            </div>
        </div>
    </footer>
    </div>
<?php endif ?>
<?php wp_footer() ?>
</body>

</html>
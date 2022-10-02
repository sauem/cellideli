<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<footer class="footer-area footer_bg">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sub_text d-flex justify-content-center">
                        <h3 id="contact" class="mb-5">Contact Us</h3>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <p><?= info('address_1') ?></p>
                            <p><?= info('address_2') ?></p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <a href="tel:<?= info('hotline_1') ?>"><?= info('hotline_1') ?></a>
                            </p>
                            <p>
                                <a href="tel:<?= info('hotline_1') ?>"><?= info('hotline_2') ?></a>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <a href="mailto:<?= info('email') ?>"><?= info('email') ?></a>
                            </p>
                        </div>
                        <div class="col-md-10 offset-md-2">
                            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="copyright_wrap">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="logo">
                                <img width="50" src="<?= ASSET ?>/img/logo-bot.jpeg"/>
                            </div>
                            <a href="/" class="text-white" style="margin-left: 20px">https://www.cellidelikaty.com</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="social_links text-lg-end">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>


<script src="<?= ASSET ?>/js/jquery-3.5.0.min.js"></script>
<script src="<?= ASSET ?>/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?= ASSET ?>/js/owl.carousel.min.js"></script>
<script src="<?= ASSET ?>/js/metisMenu.min.js"></script>
<script src="<?= ASSET ?>/js/wow.min.js"></script>
<script src="<?= ASSET ?>/js/jquery.nice-select.min.js"></script>
<script src="<?= ASSET ?>/js/jquery-ui.js"></script>
<script src="<?= ASSET ?>/js/datepicker.js"></script>
<script src="<?= ASSET ?>/js/jquery.timepicker.min.js"></script>
<script src="<?= ASSET ?>/js/isotope.pkgd.min.js"></script>
<script src="<?= ASSET ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= ASSET ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= ASSET ?>/js/main.js?v=<?= time() ?>"></script>
<?php wp_footer(); ?>

</body>
</html>

<?php
get_header();
$product = wc_get_product(get_the_ID());
if (have_posts()):
    ?>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= postImg() ?>" class="img-fluid rounded img-thumbnail"/>
                            </div>
                            <div class="col-md-6">
                                <div class="text-white">
                                    <?php
                                    do_action( 'woocommerce_single_product_summary' );
                                    ?>
                                </div>
                            </div>

                           <div class="col-12 mt-5">
                               <div class="box-white">
                                   <?= get_the_content() ?>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
endif;
get_footer(); ?>

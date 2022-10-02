<section class="slider">
    <div class="main-slider">
        <?php
        query_posts([
            'post_type' => 'slider',
            'posts' => 6
        ]);
        while (have_posts()): the_post();
            ?>
            <div class="slide-item">
                <img src="<?= get_the_post_thumbnail_url() ?>" class="img-fluid"
                     alt="<?= get_post_meta(get_the_ID(), 'alt', true) ?>">
            </div>
        <?php endwhile;
        wp_reset_query(); ?>
    </div>
    <a class="btn-slider" href="/menu">SEE MENU</a>

</section>

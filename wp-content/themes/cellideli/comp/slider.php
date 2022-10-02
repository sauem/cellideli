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
                <img style="width: 100%" src="<?= get_the_post_thumbnail_url() ?>" class="img-fluid w-100"
                     alt="<?= get_post_meta(get_the_ID(), 'alt', true) ?>">
            </div>
        <?php endwhile;
        wp_reset_query(); ?>
    </div>
    <a class="btn-slider" href="/menu">SEE MENU</a>

</section>

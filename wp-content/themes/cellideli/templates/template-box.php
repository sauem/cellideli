<?php
/*
 *  Template Name: Box size
 */
get_header();
?>
<?php
if (have_posts()):
    ?>
    <main>
        <section class="content">
            <div class="container">
                <div class="col-md-8 offset-md-2">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>
<?php
endif;

get_footer();
?>

<script>
    $('.slider').owlCarousel({
        loop: true,
        items: 1,
        center: true,
        autoplay: true,
        smartSpeed: 1000,
        responsiveClass: true,
        nav: false,
        dots: false,
    });

</script>

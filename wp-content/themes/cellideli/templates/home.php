<?php
/*
 * Template Name: Home page
 */
get_header();
?>
<main>
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
    <section class="pt-100 pb-50">
        <div class="container">
            <div class="col-md-8 offset-md-2 text-center">
                <p><span class="txt-bold">A Thao</span> I'm a huge fan of Vietnamese food since the first time I've been
                    there. It's my luck to have this
                    restaurant in my area. All of the dishes on the menu are tasty. I prefer grilled pork Banh mi and
                    Vietnamese iced coffee. So perfect for quick lunch.</p>

                <img src="<?= ASSET ?>/img/bm.jpeg"/>

                <p class="mt-4">
                    It's not easy to get a slow lunch but you need to do that when you have Vegan Pho at this place.
                    Enjoy the hot broth, the freshness of herbs, and the feeling like you're eating something very
                    healthy and natural</p>
                <p class="mb-0"> With the easy parking lot and the quality of the food here, I think the prices are so
                    reasonable. You need to experience the delicious food and the best service here. By the way, Celli
                    Deli mean ‘’Vermicelli Delicious ‘’, owner explain that to me , is a lovely name, too.
                </p>

                <div class="galleries mt-5 owl-carousel owl-theme">
                    <?php foreach (range(2, 6) as $num) {
                        ?>
                        <div class="home-thumb">
                            <img class="img-fluid" src="<?= ASSET ?>/img/m<?= $num ?>.jpeg"/>
                        </div>
                        <?php
                    } ?>
                </div>

                <div class="story">
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <div class="img">
                                <img class="img-fluid" src="<?= ASSET ?>/img/coffe.jpeg"/>
                            </div>
                        </div>
                        <div class="col-md-6 pl-0">
                            <div class="box">
                                <h4 class="text-uppercase">Our Story</h4>
                                <p>
                                    I'm a regular customer. Delicious Vietnamese food, portions are huge and the staff
                                    is
                                    super nice. I'm vegan and they have a pretty good selection of vegan things to eat.
                                    The
                                    vegetarian Pho has great broth and fresh ingredients, vegan egg roll , house tofu
                                    are
                                    the best choice . My family come here almost everyweek. We love this place .
                                </p>
                                <a class="read-more" target="_blank" href="/about">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <img width="550" class="img-fluid m-auto" src="<?= ASSET ?>/img/logo-cam.png"/>

        </div>

    </section>
</main>
<?php
get_footer();
?>

<script>
    $('.galleries').owlCarousel({
        loop: true,
        items: 1,
        center: true,
        autoplay: true,
        smartSpeed: 1000,
        responsiveClass: true,
        nav: false,
        dots: false,
    });

    $('.main-slider').slick({
        infinite: true,
        slidesToShow: 1,
        dots: true,
        arrows: false
    });

</script>

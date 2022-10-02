<header class="header_area header_2">
    <div class="header_wrap header_space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-6">
                    <div class="logo ul_li_right">
                       <?= get_custom_logo()?>
                    </div>
                </div>
                <div class="col-md-6 d-none d-lg-block">
                    <div class="main_menu_wrap navbar navbar-expand-lg">
                        <nav class="main_menu collapse navbar-collapse">
                            <ul class="main_menu_list ul_li">
                                <?php
                                wp_nav_menu('head')
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="header_right ul_li_left text-left">
                        <div class="header_carts ul_li">
                            <a class="icon cart_wishlist d-none d-lg-block" href="#">
                                <i class="fal fa-heart"></i>
                            </a>
                            <a class="icon cart_wishlist d-none d-lg-block" href="#">
                                <i class="fal fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

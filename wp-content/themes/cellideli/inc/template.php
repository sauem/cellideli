<?php
define("ASSET", get_template_directory_uri() . '/assets');
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
}

function postImg()
{
    $url = get_the_post_thumbnail_url();
    if (!$url) {
        return ASSET  . '/img/placeholder.png';
    }
    return $url;
}

function setting($key)
{
    $id = get_the_ID() ? get_the_ID() : 71;
    $result = get_post_meta($id, $key, TRUE);
    if (!$result) {
        return '';
    }
    return $result;
}

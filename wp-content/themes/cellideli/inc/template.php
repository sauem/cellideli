<?php
define("ASSET", get_template_directory_uri() . '/assets');

function setting($key)
{
    $id = get_the_ID() ? get_the_ID() : 71;
    $result = get_post_meta($id, $key, TRUE);
    if (!$result) {
        return '';
    }
    return $result;
}

<?php
define("ASSET", get_template_directory_uri() . '/assets');

function setting($key)
{
    $result = get_post_meta(71, $key, TRUE);
    if (!$result) {
        return '';
    }
    return $result;
}

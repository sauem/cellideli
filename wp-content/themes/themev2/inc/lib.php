<?php
define('ASSET', get_template_directory_uri() . '/assets');

function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
function add_menu_list_item_class($classes, $item, $args)
{
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
function replace_submenu_class($menu)
{
    $menu = preg_replace('/ class="sub-menu"/', '/ class="" /', $menu);
    return $menu;
}

add_filter('wp_nav_menu', 'replace_submenu_class');

add_filter('walker_nav_menu_start_el', 'parent_menu_dropdown', 10, 4);
function parent_menu_dropdown($item_output, $item, $depth, $args)
{

    if (is_nav_menu('Mobile Menu') && !empty($item->classes) && in_array('menu-item-has-children', $item->classes)) {
        return $item_output . '<i class="icofont icofont-rounded-down"></i>';
    }

    return $item_output;
}
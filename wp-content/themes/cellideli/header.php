<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= ASSET ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/metisMenu.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/datepicker.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/common.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/style.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/customize.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= ASSET ?>/css/responsive.css">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="body_wrap">
    <?php
    wp_body_open();
    ?>

    <div id="thetop"></div>
    <div id="backtotop">
        <a href="#" id="scroll">
            <i class="fal fa-arrow-up"></i>
            <i class="fal fa-arrow-up"></i>
        </a>
    </div>

    <?php
    include "comp/navbar.php";
    ?>

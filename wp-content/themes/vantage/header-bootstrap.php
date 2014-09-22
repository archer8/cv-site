<?php
/**
 * The Header for our theme.
 *
 * This header file is the same as the original, but includes the CDN for Bootstrap CSS and JS. This doesn't work properly with the original Vantage templates, so I made a lazy versioin for my own pages.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
               
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=10" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>



    </head>

    <body <?php body_class(); ?>>

        <?php do_action('vantage_before_page_wrapper') ?>

        <div id="page-wrapper">

            <?php do_action('vantage_before_masthead'); ?>

            <?php get_template_part('parts/masthead', apply_filters('vantage_masthead_type', siteorigin_setting('layout_masthead'))); ?>

            <?php do_action('vantage_after_masthead'); ?>

            <?php vantage_render_slider() ?>

            <?php do_action('vantage_before_main_container'); ?>

            <div id="main" class="site-main">
                <div class="full-container">
                    <?php do_action('vantage_main_top'); ?>
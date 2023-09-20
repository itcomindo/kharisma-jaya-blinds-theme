<?php

/**
 * Assets
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

/**
 * Function mm_theme_version
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_theme_version()
{
    $theme_version = wp_get_theme()->get('Version');
    return $theme_version;
}


require get_template_directory() . '/assets/images/images.php';


/**
 * Function enqueue style and script
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_load_scripts()
{
    //dequeue jquery
    wp_deregister_script('jquery');
    //load jquery 3.7.0 from google cdn
    wp_enqueue_script('mm-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), '3.7.0', true);

    //load normalize.css from cdn
    wp_enqueue_style('mm-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1', 'all');

    //load fontawesome from cdn
    wp_enqueue_style('mm-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '6.2.0', 'all');

    //load animate.css from cdn
    wp_enqueue_style('mm-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all');

    // load style.css.
    wp_enqueue_style('mm-style', get_stylesheet_uri(), array(), mm_theme_version(), 'all');

    if (is_front_page() || is_404()) {
        //home.css.
        wp_enqueue_style('mm-home-style', get_template_directory_uri() . '/assets/css/home.css', array(), mm_theme_version(), 'all');
        //flickity.css.
        wp_enqueue_style('mm-flickity-style', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css', array(), '2.2.2', 'all');
        //granim.js.
        wp_enqueue_script('mm-granim-js', 'https://cdn.jsdelivr.net/npm/granim@2.0.0/dist/granim.min.js', array(), '2.0.0', true);
        //flickity.js.
        wp_enqueue_script('mm-flickity-js', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js', array(), '2.2.2', true);
    } elseif (is_singular()) {
        wp_enqueue_style('mm-page-style', get_template_directory_uri() . '/assets/css/singular.css', array(), mm_theme_version(), 'all');
    }




    //load js from assets/js
    wp_enqueue_script('mm-global-js', get_template_directory_uri() . '/assets/js/global.js', array(), mm_theme_version(), true);
}
add_action('wp_enqueue_scripts', 'mm_load_scripts');


/**
 * Function Name: mm_admin_scripts
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_admin_scripts()
{
    wp_enqueue_style('mm-admin-style', get_template_directory_uri() . '/assets/css/admin.css', array(), mm_theme_version(), 'all');
}
add_action('admin_enqueue_scripts', 'mm_admin_scripts');

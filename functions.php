<?php

/**
 * functions
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
defined('ABSPATH') || exit;

/**
 * Function load carbon fields
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme', 'crb_load');

//disabling gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

add_action('do_meta_boxes', 'mm_remove_revisions_metabox');
function mm_remove_revisions_metabox()
{
    remove_meta_box('revisionsdiv', 'post', 'normal');
}


defined('ABSPATH') || exit;
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');


/**
 * MasmonsThemeFunction
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 * @param array $html_tags_allowed Array of allowed HTML tags.
 */
function mah($html_tags_allowed = array())
{
    if (!is_array($html_tags_allowed)) {
        return array(); // Kembalikan array kosong jika input tidak valid.
    }
    $pass = array();

    // Definisikan atribut untuk SVG.
    $svg_args = array(
        'class'             => true,
        'aria-hidden'       => true,
        'aria-labelledby'   => true,
        'role'              => true,
        'xmlns'             => true,
        'width'             => true,
        'height'            => true,
        'viewBox'           => true, // Perbaiki casing di sini.
        'version'           => true,
        'xmlns:xlink'       => true,
        'x'                 => true,
        'y'                 => true,
        'enable-background' => true,
        'xml:space'         => true,
        'metadata'          => true,
    );

    foreach ($html_tags_allowed as $tag) {
        $attributes = array(
            'class' => array(),
            'id'    => array(), // Tambahkan atribut id.
        );

        // Tambahkan atribut tambahan untuk tag spesifik.
        if ('img' === $tag) {
            $attributes['src']    = array();
            $attributes['alt']    = array();
            $attributes['title']  = array();
            $attributes['width']  = array();
            $attributes['height'] = array();
        }

        if ('a' === $tag) {
            $attributes['href']   = array();
            $attributes['target'] = array();
            $attributes['rel']    = array();
            $attributes['style']  = array();
            $attributes['class']  = array();
        }

        // Jika tag adalah SVG, gunakan atribut yang telah didefinisikan dalam $svg_args.
        if ('svg' === $tag) {
            $attributes = $svg_args;
        }

        // iframe.
        if ('iframe' === $tag) {
            $attributes['src']             = true;
            $attributes['width']           = true;
            $attributes['height']          = true;
            $attributes['frameborder']     = true;
            $attributes['allowfullscreen'] = true;
        }

        // Jika tag adalah div, tambahkan atribut data-xxxx dengan validasi nilai hex.
        if ('div' === $tag) {
            $attributes = array_merge(
                $attributes,
                array(
                    '/^data-[a-zA-Z0-9\-]*$/' => array(
                        'pattern' => '/^#[a-fA-F0-9]{6}$/',
                    ),
                )
            );
        }

        $pass[$tag] = $attributes;
    }

    // Tambahkan elemen lain yang diperlukan untuk SVG.
    $pass['g']     = array('fill' => true);
    $pass['title'] = array('title' => true);
    $pass['path']  = array(
        'd'    => true,
        'fill' => true,
    );

    return $pass;
}

/**
 * Function localhost detector
 *
 * Description: This function is used to detect if the current site is running on localhost or not.
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_is_localhost()
{
    $whitelist = array('127.0.0.1', '::1');

    if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) { // phpcs:ignore
        return true;
    }
    // Atau, jika Anda ingin menggunakan nama host.
    if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) { // phpcs:ignore
        return true;
    }
    return false;
}


require get_template_directory() . '/assets/assets.php';


//memuat compontents.php
require get_template_directory() . '/template-parts/components/components.php';
//memuat inc.php
require get_template_directory() . '/inc/inc.php';
// memuat plugins
require get_template_directory() . '/plugins/plugins.php';

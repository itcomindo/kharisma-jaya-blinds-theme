<?php

/**
 * images
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
defined('ABSPATH') || exit;

/**
 * Function mm_get_theme_image
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_get_theme_image()
{
    $image = get_template_directory_uri() . '/assets/images/';
    return $image;
}
define('THEME_IMAGE', mm_get_theme_image());

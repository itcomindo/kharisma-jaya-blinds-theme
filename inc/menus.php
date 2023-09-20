<?php

/**
 * menus.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;


/**
 * Function register-menu
 * 
 * header-menu, footer-menu, mobile-menu
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
add_action('init', function () {

    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
            'mobile-menu' => 'Mobile Menu'
        )
    );
});

/**
 * Function header-menu
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_header_menu()
{
    wp_nav_menu([
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'menu-container_class' => 'header-menu',
        'menu-container_id' => 'header-menu',
        'menu_class' => 'header-menu-list',
        'menu_id' => 'header-menu-list',
    ]);
}


/**
 * Function Name mm_show_footer_menu
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_footer_menu()
{
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'container' => 'nav',
        'menu-container_class' => 'footer-menu',
        'menu-container_id' => 'footer-menu',
        'menu_class' => 'footer-menu-list',
        'menu_id' => 'footer-menu-list',
    ]);
}

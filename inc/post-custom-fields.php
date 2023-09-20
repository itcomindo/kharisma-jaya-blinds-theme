<?php

/**
 * Post Custom Fields
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'mm_post_custom_fields');
function mm_post_custom_fields()
{
    $container = Container::make('post_meta', 'Produk');

    $terms = [
        'window-blinds',
        'gorden-rumah-sakit',
        'wooden-blinds',
        'roller-blinds',
        'blind-motorized',
        'horizontal-blinds',
        'roller-blinds-outdoor',
        'vertical-blinds',
        'zebra-blinds'
    ];

    // Menambahkan kondisi pertama
    $first_term = array_shift($terms);
    $container->where('post_term', '=', [
        'field' => 'slug',
        'value' => $first_term,
        'taxonomy' => 'category'
    ]);

    // Menambahkan kondisi lainnya
    foreach ($terms as $term) {
        $container->or_where('post_term', '=', [
            'field' => 'slug',
            'value' => $term,
            'taxonomy' => 'category'
        ]);
    }

    $container->add_fields([
        Field::make('checkbox', 'popular_produk_status', 'Popular Produk')
    ]);
}

<?php

/**
 * Fields
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;


/**
 * Function Carbon Fields
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function () {
    Container::make('theme_options', 'Theme Options')
        ->add_fields([
            Field::make('image', 'logo', 'Logo')
                ->set_value_type('url'),
            Field::make('text', 'perusahaan', 'Perusahaan'),
            Field::make('textarea', 'alamat', 'Alamat'),
            Field::make('textarea', 'about', 'About Company'),
            Field::make('text', 'phone_display', 'Telepon Kantor')
                ->set_width(25)
                ->set_help_text('isi dengan telepon kantor'),
            Field::make('text', 'url_wa', 'Whatsapp')
                ->set_width(25)
                ->set_help_text('isi dengan nomor handphone (1 nomor saja)'),
            Field::make('text', 'url_call', 'Mobile Phone')
                ->set_width(25)
                ->set_help_text('isi dengan nomor handphone (1 nomor saja)'),
            Field::make('text', 'email', 'Email')
                ->set_width(25)
                ->set_help_text('isi dengan email perusahaan'),
            Field::make('checkbox', 'global_discount_status', 'Gunakan Global Discount'),
            Field::make('text', 'global_discount', 'Global Discount'),
            Field::make('complex', 'cs', 'Customer Services')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('checkbox', 'staff_status', 'Enable Staff')
                        ->set_option_value('yes')
                        ->set_default_value(true),
                    Field::make('text', 'staff_name', 'Nama Staff'),
                    Field::make('text', 'staff_job', 'Job'),
                    Field::make('checkbox', 'show_wa', 'Show Whatsapp'),
                    Field::make('text', 'wa_staff', 'Whatsapp'),
                    Field::make('checkbox', 'show_call', 'Show Phone'),
                    Field::make('text', 'phone_staff', 'Phone'),
                ]),

            Field::make('checkbox', 'photgal_stat', 'Show Photo Gallery')
                ->set_option_value('yes')
                ->set_default_value(true),

            Field::make('separator', 'othersettingsep', 'Other Setting')
                ->set_classes('sb-separator'),

            Field::make('separator', 'othersettingsepchild', 'Product Display')
                ->set_classes('sb-separator-child'),

            //jumlah produk per halaman.
            Field::make('text', 'product_per_page', 'Jumlah Produk Per Halaman')
                ->set_attribute('type', 'number')
                ->set_default_value(20)
                ->set_help_text('isi dengan angka'),

            //show stars.
            Field::make('checkbox', 'show_stars', 'Show Stars')
                ->set_option_value('yes')
                ->set_default_value(true),

            //show lihat produk link.
            Field::make('checkbox', 'show_lihat_produk', 'Show Lihat Produk Link')
                ->set_option_value('yes')
                ->set_default_value(true),

            //lihat produk link text.
            Field::make('text', 'lihat_produk_text', 'Lihat Produk Link Text')
                ->set_width(25)
                ->set_default_value('Lihat Produk')
                ->set_help_text('isi dengan text link lihat produk'),

            //show sales.
            Field::make('checkbox', 'show_sales', 'Show Sales')
                ->set_option_value('yes')
                ->set_default_value(true),

            //trim title.
            Field::make('checkbox', 'trim_title', 'Trim Title')
                ->set_option_value('yes')
                ->set_default_value(true),

            //trim title length.
            Field::make('text', 'trim_title_length', 'Trim Title Length')
                ->set_width(25)
                ->set_attribute('type', 'number')
                ->set_help_text('isi dengan angka'),

            //show excerpt.
            Field::make('checkbox', 'show_excerpt', 'Show Excerpt')
                ->set_option_value('yes')
                ->set_default_value(true),

            //trim excerpt.
            Field::make('checkbox', 'trim_excerpt', 'Trim Excerpt')
                ->set_option_value('yes')
                ->set_default_value(true),

            //trim excerpt length.
            Field::make('text', 'trim_excerpt_length', 'Trim Excerpt Length')
                ->set_attribute('type', 'number')
                ->set_help_text('isi dengan angka'),

            // all fields end above this line
        ]);
});


/**
 * Function mm_show_url_email
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_url_email()
{
    $x = carbon_get_theme_option('email');
    if ($x) {
        echo 'mailto:' . $x;
    } else {
        echo '';
    }
}

/**
 * Function mm_show_button
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 * @param string $type isi dengan whatsapp, call, email
 * @param string $cls isi dengan class
 * @param string $btn_text isi dengan text e.g. Chat Now
 */
function mm_show_button($type, $cls, $btn_text)
{
    if ('whatsapp' === $type || 'wa' === $type) {
        $x = carbon_get_theme_option('url_wa');
        if ($x) {
            echo  '<a class="global-button-with-icon ' . $cls . '" href="' . esc_html(str_replace(['-', ' '], '', 'https://api.whatsapp.com/send?phone=' . substr_replace($x, '62', 0, 1))) . '"><i class="fab fa-whatsapp"></i> ' . $btn_text . '</a>';
        }
    } elseif ('call' === $type || 'phone' === $type) {
        $x = carbon_get_theme_option('url_call');
        if ($x) {
            echo  '<a class="global-button-with-icon ' . $cls . '" href="' . esc_html(str_replace(['-', ' '], '', 'tel:+' . substr_replace($x, '62', 0, 1))) . '"><i class="fas fa-phone"></i> ' . $btn_text . '</a>';
        }
    } elseif ('email' === $type || 'mail' === $type) {
        $x = carbon_get_theme_option('email');
        if ($x) {
            echo  '<a class="global-button-with-icon ' . $cls . '" href="' . esc_html(str_replace(['-', ' '], '', 'mailto:' . $x)) . '"><i class="fas fa-envelope"></i> ' . $btn_text . '</a>';
        }
    }
}

/**
 * Function discount
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_discount()
{
    $status = carbon_get_theme_option('global_discount_status');
    if ($status) {
        $discount = carbon_get_theme_option('global_discount');
        echo esc_html($discount);
    }
}

/**
 * Function email
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 * @param string $what isi dengan url or display
 */
function mm_show_email($what)
{
    $x = carbon_get_theme_option('email');
    if ('url' === $what) {
        echo esc_html(str_replace(['-', ' '], '', 'mailto:' . $x));
    } elseif ('display' === $what) {
        echo esc_html($x);
    } else {
        echo '';
    }
}


/**
 * Function url_call
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_url_call()
{
    $x = carbon_get_theme_option('url_call');
    echo esc_html(str_replace(['-', ' '], '', 'tel:+' . substr_replace($x, '62', 0, 1)));
}

/**
 * Function url_wa
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_url_wa()
{
    $x = carbon_get_theme_option('url_wa');
    if ($x) {
        echo  esc_html(str_replace(['-', ' '], '', 'https://api.whatsapp.com/send?phone=' . substr_replace($x, '62', 0, 1)));
    }
}


/**
 * Field phone display
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_phone_display()
{
    echo esc_html(carbon_get_theme_option('phone_display'));
}

/**
 * Function about
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_about()
{
    echo esc_html(carbon_get_theme_option('about'));
}



/**
 * Function Alamat
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_alamat()
{
    echo esc_html(carbon_get_theme_option('alamat'));
}

/**
 * Function perusahaan
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_perusahaan()
{
    echo esc_html(carbon_get_theme_option('perusahaan'));
}

/**
 * Function logo
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
function mm_show_logo()
{
    $logo = carbon_get_theme_option('logo');
    if ($logo) {
        echo esc_html($logo);
    }
}

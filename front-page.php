<?php

/**
 * front-page
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
defined('ABSPATH') || exit;
get_header();

get_template_part('template-parts/sections/hero-section');
get_template_part('template-parts/sections/query-product-section');
get_template_part('template-parts/sections/features-section');
get_template_part('template-parts/sections/testimonials-section');
get_template_part('template-parts/sections/logo-customer-section');
get_template_part('template-parts/sections/cta-section');
get_template_part('template-parts/sections/content-section');
// get_template_part('template-parts/sections/faq-section');




get_footer();

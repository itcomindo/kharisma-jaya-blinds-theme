<?php

/**
 * File name: Discount Component
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;
if (carbon_get_theme_option('global_discount_status')) {
?>
    <div id="discount-wr">
        <span class="upto">Upto</span>
        <span class="disnum"><?php echo esc_html(carbon_get_theme_option('global_discount')); ?></span>
        <span class="distext">Discount</span>
    </div>
<?php
}

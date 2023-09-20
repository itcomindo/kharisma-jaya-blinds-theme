<?php

/**
 * mobile-app.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;
?>
<div id="mob-pr">
    <div class="mob"><a href="/" title="<?php mm_show_perusahaan(); ?>"><i class="fas fa-house-chimney"></i><span>Home</span></a></div>
    <div class="mob"><a href="#" title="product"><i class="fab fa-windows"></i> <span>Produk</span></a></div>
    <div class="mob"><?php mm_show_button('wa', 'mob-link', "Chat"); ?></div>
    <div class="mob"><?php mm_show_button('call', 'mob-link', "Call"); ?></div>
</div>
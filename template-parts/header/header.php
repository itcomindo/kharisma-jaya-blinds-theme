<?php

/**
 * header
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
defined('ABSPATH') || exit;
?>
<section id="tb" class="section">
    <div class="container">
        <div id="tb-wr">
            <div id="tb-left">
                <span>Supplier Window Blinds Surabaya</span>
            </div>
            <div id="tb-right">
                <span><?php mm_show_phone_display(); ?></span>
            </div>
        </div>
    </div>
</section>

<header id="header" class="section">
    <div class="container">
        <div id="header-wr">
            <div id="header-left">
                <h2 id="header-logo"><a href="/" title="Supplier Window Blinds Surabaya">Surabayablinds.com</a></h2>
            </div>
            <div id="header-right">
                <?php mm_show_header_menu(); ?>
                <div id="menu-trigger"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </div>
</header>
<?php
get_template_part('template-parts/navigation/category-menu');

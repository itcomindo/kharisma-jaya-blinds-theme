<?php

/**
 * footer
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
defined('ABSPATH') || exit;
?>
<footer id="foo" class="section">
    <div class="container">
        <div id="foo-wr">
            <div id="foo-top">
                <h2 class="section-head"><?php mm_show_perusahaan(); ?></h2>
                <span><?php mm_show_alamat(); ?></span>
                <span><?php mm_show_phone_display(); ?></span>
            </div>
            <div id="foo-bot">
                <div id="foo-left" class="foo-col">
                    <h3 class="foo-head section-subhead-medium"><span class="tebal">About</span> <span class="tipis">Us</span></h3>
                    <?php mm_show_about(); ?>
                </div>
                <div id="foo-mid" class="foo-col">
                    <h3 class="foo-head section-subhead-medium"><span class="Tebal">The</span> <span class="tipis">Nav</span></h3>
                    <?php mm_show_footer_menu(); ?>
                </div>
                <div id="foo-right" class="foo-col">
                    <h3 class="foo-head section-subhead-medium"><span class="tebal">Blog</span> <span class="tipis">Posts</span></h3>
                    <?php get_template_part('inc/recent-post'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="cp" class="section">
    <div class="container h100">
        <div id="cp-wr" class="h100">
            <span>Web Design by: Budiharyono.com</span>
        </div>
    </div>
</div>
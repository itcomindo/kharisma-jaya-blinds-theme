<?php

/**
 * page
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
defined('ABSPATH') || exit;
get_header();
?>
<section id="pg" class="section">
    <div class="container">
        <div id="pg-wr">
            <h1 class="section-head"><?php the_title(); ?></h1>
            <div id="the-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
?>
    <style>
        #pg {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
    </style>
<?php
});
get_footer();

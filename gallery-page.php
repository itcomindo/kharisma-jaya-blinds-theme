<?php

/**
 *=========================
 * Template Name: Gallery Page
 *=========================
 */

defined('ABSPATH') || exit;

get_header();

?>
<section id="gal" class="section">
    <div class="container">
        <div id="gal-wr">
            <div id="gal-top">
                <h1 class="section-head">Photo Gallery</h1>
            </div>
            <div id="gal-bot">
                <?php get_template_part('/template-parts/components/photo-gallery-component'); ?>
            </div>
        </div>
    </div>
</section>
<?php

add_action('wp_footer', function () {
?>
    <style>
        #gal {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
    </style>
<?php
});


get_footer();

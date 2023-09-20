<?php

/**
 *=========================
 * Template Name: Contact Page
 *=========================
 */
defined('ABSPATH') || exit;

get_header();
?>
<section id="cont" class="section">
    <div class="container">
        <div id="cont-wr">
            <div id="cont-left">
                <h1 class="section-head">Contact Us</h1>
            </div>
            <div id="cont-right">
                MAP
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
?>
    <style>
        #cont {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
    </style>
<?php
});
get_footer();

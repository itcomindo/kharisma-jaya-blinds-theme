<?php
/**
 * post
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
defined('ABSPATH') || exit;

$excerpt = get_the_excerpt();
//trim to 20 words
$excerpt = wp_trim_words($excerpt, 20);
?>
<section id="post-hero" class="section">
    <div class="container">

        <div id="post-hero-wr">
        <?php get_template_part('template-parts/components/discount-component'); ?>
            <div id="ph-left" class="col">
                <h1 id="post-head" class="section-head"><?php the_title(); ?></h1>
                <span><?php echo esc_html($excerpt); ?></span>
            </div>
            <!-- right -->
            <div id="ph-right" class="col">
                <?php the_post_thumbnail('full', ['alt' => get_the_title(), 'title' => get_the_title()]) ?>
            </div>

        </div>
    </div>
</section>

<section id="pc" class="section">
    <div class="container">
        <div id="pc-wr">
            <div id="the-content">
                <?php the_content(); ?>
            </div>
            <?php get_template_part('/template-parts/components/share-produk-component'); ?>
            <?php get_template_part('/template-parts/components/photo-gallery-component'); ?>
            <?php get_template_part('/template-parts/components/related-product-component'); ?>
        </div>
    </div>
</section>


<?php
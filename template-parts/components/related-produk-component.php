<?php

/**
 * related-produk.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;


?>
<h1>test sdsd Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus libero optio veniam? Amet dolores, labore magnam, rerum, facilis vel nihil corrupti provident eaque illum harum et quis laudantium eveniet in.</h1>
<?php

//get current post category
$cat = get_the_category(get_the_ID());
$args = ([
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'category_name' => $cat[0]->slug,
    'post__not_in' => [get_the_ID()]
]);
echo '<h3>Produk Terkait</h3>';
echo '<div id="prod-card-wr" class="related-post">';
$q = new WP_Query($args);
if ($q->have_posts()) {
    while ($q->have_posts()) {
        $q->the_post();
?>
        <h3>Related Product</h3>
        <div class="prod-card">
            <div class="prod-card-top">
                <div class="prod-img-wr">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('full', ['alt' => get_the_title(), 'title' => get_the_title()]); ?>
                    </a>
                </div>
            </div>

            <div class="prod-card-bot">
                <div class="prod-title-wr">
                    <h3>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                </div>
                <div class="prod-card-exc-wr">
                    <span>Jual <?php the_title(); ?> untuk seluruh wilayah Surabaya dan sekitarnya.</span>
                </div>

                <a href="<?php the_permalink(); ?>" class="prod-card-btn" title="<?php the_title(); ?>" rel="bookmark">Lihat Produk</a>



            </div>
        </div>
<?php
    }
    wp_reset_postdata();
}
echo '</div>';

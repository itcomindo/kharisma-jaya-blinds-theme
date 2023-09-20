<?php

/**
 * hero
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

?>

<section id="hero" class="section">
    <div class="container">
        <div id="hero-wr">
            <div id="hero-left">
                <!-- <div id="hero-cat-dd">Browse By Category</div> -->
                <?php
                get_template_part('template-parts/components/category-list-component');
                ?>
            </div>
            <div id="hero-right">
                <div id="hero-card-wr">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'category_name' => 'window-blinds'
                    );
                    $q = new WP_Query($args);
                    if ($q->have_posts()) {
                        while ($q->have_posts()) {
                            $q->the_post();
                    ?>
                            <div class="hero-card">
                                <div class="hero-card-fim-wr">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('full', ['alt' => get_the_permalink(), 'title' => get_the_title()]); ?></a>
                                </div>
                                <div class="hero-card-meta-wr">
                                    <h3 class="hero-card-head section-head-big">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <span>Jual <?php the_title(); ?> free pengukuran, pengiriman, instalasi khusus wilayah Kota Surabaya dan sekitarnya.</span>
                                </div>
                            </div>
                    <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
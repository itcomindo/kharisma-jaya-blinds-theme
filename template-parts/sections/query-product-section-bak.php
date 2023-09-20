<?php

/**
 * Query Produk
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

?>

<section id="prod" class="section">
    <div class="container">
        <div id="prod-wr">
            <!-- prod top -->
            <div id="prod-top"></div>

            <!-- prod bottom -->
            <div id="prod-bot">
                <div id="prod-card-wr">

                    <!-- start query -->
                    <?php
                    $post_perpage = carbon_get_theme_option('product_per_page');
                    if (is_category()) {
                        //get current category ID
                        $cat_id = get_query_var('cat');
                        $args = ([
                            'post_type' => 'post',
                            'category__in' => $cat_id,
                            'posts_per_page' => $post_perpage,
                        ]);
                    } elseif (is_tag()) {
                        //get current tag ID
                        $tag_id = get_query_var('tag_id');
                        $args = ([
                            'post_type' => 'post',
                            'tag_id' => $tag_id,
                            'posts_per_page' => $post_perpage,
                        ]);
                    } elseif (is_front_page()) {
                        $args = ([
                            'post_type' => 'post',
                            'category_name' => 'window-blinds',
                            'posts_per_page' => $post_perpage,
                            'orderby' => 'rand'
                        ]);
                    } elseif (is_home()) {
                        $args = ([
                            'post_type' => 'post',
                            'category_name' => 'window-blinds',
                            'posts_per_page' => $post_perpage,
                            'orderby' => 'rand',
                            'category_name' => 'blog'

                        ]);
                    }
                    $count = 0;
                    $q = new WP_Query($args);
                    if ($q->have_posts()) {
                        while ($q->have_posts()) {
                            $count++;
                            $q->the_post();
                            //title
                            if (carbon_get_theme_option('trim_title')) {
                                $title = get_the_title();
                                $titlength = carbon_get_theme_option('trim_title_length');
                                if ($titlength) {
                                    //count title length
                                    $tl = strlen($title);
                                    if ($tl > $titlength) {
                                        $title = substr($title, 0, $titlength) . '...';
                                    } else {
                                        //do nothing
                                        $title = $title;
                                    }
                                } else {
                                    $title = substr($title, 0, 200) . '...';
                                }
                            } else {
                                //ini kalau title tidak ditampilkan
                                $title = get_the_title();
                            }
                            //excerpt
                            if (carbon_get_theme_option('show_excerpt')) {
                                //ini kalau excerpt ditampilkan
                                $x = get_the_excerpt();
                                if (carbon_get_theme_option('trim_excerpt')) {
                                    //ini kalau excerpt ditrim
                                    if (carbon_get_theme_option('trim_excerpt_length')) {
                                        //ini kalau excerpt ditrim dan lengthnya diisi
                                        $excerpt = substr($x, 0, carbon_get_theme_option('trim_excerpt_length')) . '...';
                                    } else {
                                        //ini kalau excerpt ditrim tapi lengthnya tidak diisi
                                        $excerpt = substr($x, 0, 50) . '...';
                                    }
                                } else {
                                    //ini kalau excerpt tidak ditrim
                                    $excerpt = $x;
                                }
                            } else {
                                //ini kalau excerpt tidak ditampilkan
                                $excerpt = '';
                            }
                    ?>
                            <div class="prod-card">
                                <div class="prod-card-top">
                                    <div class="prod-img-wr">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_post_thumbnail('full', ['alt' => get_the_title(), 'title' => get_the_title()]); ?>
                                        </a>

                                        <?php
                                        if (carbon_get_theme_option('show_stars')) {
                                            get_template_part('template-parts/components/five-stars-component');
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="prod-card-bot">
                                    <div class="prod-title-wr">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <?php echo $title; ?>
                                            </a>
                                        </h3>
                                    </div>

                                    <?php
                                    if (carbon_get_theme_option('show_excerpt')) {
                                    ?>
                                        <div class="prod-card-exc-wr">
                                            <span><?php echo $excerpt; ?>.</span>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if (carbon_get_theme_option('show_lihat_produk')) {
                                        $prodtext = carbon_get_theme_option('lihat_produk_text');
                                        if ($prodtext) {
                                            $prodtext = $prodtext;
                                        } else {
                                            $prodtext = 'Lihat Produk';
                                        }
                                    ?>
                                        <a href="<?php the_permalink(); ?>" class="prod-card-btn" title="<?php the_title(); ?>" rel="bookmark"><?php echo $prodtext; ?></a>
                                    <?php
                                    }
                                    ?>

                                </div>

                                <?php
                                if (carbon_get_theme_option('show_sales')) {
                                    get_template_part('template-parts/components/fake-sales-component');
                                }
                                ?>

                            </div>
                    <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                    <!-- end query -->
                </div>
            </div>
        </div>
    </div>
</section>
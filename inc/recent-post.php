<?php

/**
 * Recent Post
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

$args = ([
    'category_name' => 'blog',
    'posts_per_page' => 3
]);
$query = new WP_Query($args);
if ($query->have_posts()) {
    echo '<ul id="recposts">';
    while ($query->have_posts()) {
        $query->the_post();
?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
    }
    wp_reset_postdata();
    echo '</ul>';
}

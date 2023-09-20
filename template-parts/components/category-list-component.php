<?php

/**
 * category-list-component
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

?>

<div id="catlist">
    <?php

    // get all categories and link to category page with category name as link text and category slug as class name for styling purpose and echo it as list item.
    $categories = get_categories();
    echo '<ul>';
    foreach ($categories as $category) {
        echo '<li class="' . $category->slug . '"><a href="' . get_category_link($category->term_id) . '" title="' . $category->name . '">' . $category->name . '</a></li>';
    }
    echo '</ul>';
    ?>
</div>
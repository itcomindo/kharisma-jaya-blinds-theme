<?php

/**
 * fake-sales-component
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

global $post;
$post_id = $post->ID;

// Dapatkan tanggal saat ini dan tanggal terakhir di mana peningkatan terjadi
$current_date = date('Y-m-d');
$last_increment_date = get_post_meta($post_id, 'mm_last_increment_date', true);

// Jika tanggal terakhir tidak ada atau berbeda dari tanggal saat ini, lakukan peningkatan
if (empty($last_increment_date) || $last_increment_date != $current_date) {
    $post_id++;
    update_post_meta($post_id, 'mm_last_increment_date', $current_date);
}

?>

<div class="sales">
    <small>Terjual: <?php echo $post_id; ?> items</small>
</div>
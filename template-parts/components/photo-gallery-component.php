<?php

/**
 * photo-gallery-component.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

if (is_single()) {


    if (carbon_get_theme_option('photgal_stat')) {
        $cat = get_the_category(get_the_ID());
        if (!empty($cat)) {
            $cat_slug = $cat[0]->slug;

            // Array untuk filter untuk menampilkan gallery
            $p = ['window', 'blinds', 'tirai', 'roller', 'horizontal', 'vertical'];

            // Cek apakah $cat_slug mengandung salah satu dari $p
            $match = array_filter($p, function ($val) use ($cat_slug) {
                return false !== strpos($cat_slug, $val);
            });

            if (!empty($match)) { // Jika ada kecocokan
                // Kode Anda di sini
?>
                <div id="photgal-top">
                    <h2 class="section-head-medium">Photo Produk</h2>
                    <span>Photo produk terkait <?php the_title(); ?> lainnya. Tersedia diwilayah Malang, Kediri, Sidoarjo , Tulungagung, Mojokerto, Trenggalek, Jember, Blitar, Madiun, Ponorogo, Nganjuk, Ngawi, Lamongan, Bojonegoro, Kota Batu, Magetan, Gresik, Pasuruan, Tuban, Banyuwangi, Probolinggo, Situbondo, Bondowoso, Lumajang, Bangkalan, Pacitan, Pamekasan, Sampang, Jombang, Sumenep Jawa Timur.</span>
                </div>
                <div id="photgal-wr">
                    <?php echo mm_show_product_photo_gallery(); ?>
                </div>
    <?php
            }
        }
    }
} else {
    ?>
    <div id="photgal-wr">
        <?php echo mm_show_product_photo_gallery(); ?>
    </div>
<?php
}
function mm_show_product_photo_gallery()
{
    // Lokasi folder 'blinds' di dalam folder 'uploads'
    $dir_path = wp_upload_dir()['basedir'] . '/blinds/';
    $dir_url = wp_upload_dir()['baseurl'] . '/blinds/';

    // Ambil semua file .webp dari dalam folder
    $files = glob($dir_path . '*.webp');

    // Random urutan file
    shuffle($files);

    if (is_single()) {
        // Ambil 8 file pertama dari hasil random
        $selected_files = array_slice($files, 0, 8);
    } else {
        $selected_files = array_slice($files, 0, 20);
    }

    // Periksa apakah ada file yang dipilih
    $x = 0;
    if (!empty($selected_files)) {
        // Tampilkan 8 file dalam foreach
        foreach ($selected_files as $file) {
            $x++;
            $file_name = basename($file);
            $file_url = esc_url($dir_url . $file_name);
            echo '<div class="photgal-item">';
            echo '<img width="164" height="92" src="' . $file_url . '" alt="Contoh ' . get_the_title() . ' ' . $x . '" title="Contoh ' . get_the_title() . ' ' . $x . '">';
            echo '</div>';
        }
    } else {
        // Kode untuk kasus di mana tidak ada file atau file tidak ditemukan
        echo '<div id="pg">';
        echo 'Tidak ada foto yang ditemukan.';
        echo '</div>';
    }
}

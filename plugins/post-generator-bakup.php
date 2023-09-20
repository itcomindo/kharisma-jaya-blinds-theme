<?php

/**
 * post-generator.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

function mm_post_generator_menu()
{
    add_menu_page('Post Generator', 'Post Generator', 'manage_options', 'mm_post_generator', 'mm_post_generator_page');
}

function mm_post_generator_page()
{
?>
    <div id="mm-pg" class="wrap">
        <h1>Post Generator</h1>
        <div id="mm-pg-wr">
            <form method="post" action="">
                <label for="category">Kategori:</label>
                <input type="text" name="category" id="category"><br>
                <p class="keterangan">*custom text tambahkan disini untuk keterangan*</p>

                <label for="titles">Judul Post:</label>
                <textarea name="titles" id="titles"></textarea><br>
                <p class="keterangan">*custom text tambahkan disini untuk keterangan*</p>

                <label for="content">Konten (Spintax):</label>
                <textarea name="content" id="content"></textarea><br>
                <p class="keterangan">*custom text tambahkan disini untuk keterangan*</p>

                <input type="submit" name="mm_generate_posts" value="RUN">
            </form>
        </div>
    </div>
<?php
}

add_action('admin_menu', 'mm_post_generator_menu');


function mm_spin_content($text)
{
    // regex untuk mencari spintax
    $pattern = '/\{([^{}]+)\}/';
    while (preg_match($pattern, $text, $matches)) {
        $choices = explode('|', $matches[1]);
        $text = preg_replace('/' . preg_quote($matches[0], '/') . '/', $choices[array_rand($choices)], $text, 1);
    }
    return $text;
}


function mm_generate_posts()
{
    if (isset($_POST['mm_generate_posts'])) {
        $category = sanitize_text_field($_POST['category']);
        $titles = sanitize_textarea_field($_POST['titles']);
        $content_spintax = sanitize_textarea_field($_POST['content']);

        $titles = explode("\n", trim($titles));

        foreach ($titles as $title_with_keyword) {
            // Ekstrak keyword dari judul
            preg_match('/\[(.*?)\]/', $title_with_keyword, $matches);
            $keyword = isset($matches[1]) ? $matches[1] : '';

            // Hapus tanda kurung kotak dari judul dan gantikan dengan keyword itu sendiri
            $title = str_replace("[$keyword]", $keyword, $title_with_keyword);

            $spun_content = mm_spin_content($content_spintax);

            // Ganti [keyword] dalam konten dengan keyword yang diekstrak dari judul
            $spun_content = str_replace('[keyword]', $keyword, $spun_content);

            $post_data = array(
                'post_title'    => trim($title),
                'post_content'  => $spun_content,
                'post_status'   => 'publish',
                'post_category' => array(get_cat_ID($category))
            );

            wp_insert_post($post_data);
        }
    }
}


add_action('admin_init', 'mm_generate_posts');

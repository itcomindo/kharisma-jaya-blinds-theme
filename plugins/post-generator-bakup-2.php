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

                <button type="button" id="mm_open_media">Pilih Gambar</button>
                <input type="hidden" id="mm_selected_images" name="mm_selected_images" value="">


                <input type="submit" name="mm_generate_posts" value="RUN">
            </form>
        </div>
        <script>
            jQuery(document).ready(function() {
                var media_frame;
                var image_ids = [];

                jQuery('#mm_open_media').click(function(e) {
                    e.preventDefault();

                    if (media_frame) {
                        media_frame.open();
                        return;
                    }

                    media_frame = wp.media.frames.media_frame = wp.media({
                        title: 'Pilih Gambar',
                        button: {
                            text: 'Pilih'
                        },
                        multiple: true
                    });

                    media_frame.on('select', function() {
                        var selection = media_frame.state().get('selection');

                        selection.map(function(attachment) {
                            attachment = attachment.toJSON();
                            image_ids.push(attachment.id);
                        });

                        jQuery('#mm_selected_images').val(JSON.stringify(image_ids));
                    });

                    media_frame.open();
                });
            });
        </script>
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
    // Pastikan kita mendapatkan POST data yang diharapkan
    if (isset($_POST['category'], $_POST['titles'], $_POST['content'], $_POST['mm_selected_images'])) {
        // Sanitasi dan validasi data
        $category = sanitize_text_field($_POST['category']);
        $titles = explode("\n", sanitize_textarea_field($_POST['titles']));
        $content = sanitize_textarea_field($_POST['content']);
        $image_ids_json = sanitize_text_field($_POST['mm_selected_images']);

        // Decode array gambar dari format JSON
        $image_ids = json_decode($image_ids_json, true);

        // Looping melalui setiap judul untuk membuat post baru
        foreach ($titles as $title_with_keyword) {
            // Ekstrak keyword dari judul
            preg_match('/\[(.*?)\]/', $title_with_keyword, $matches);
            $keyword = isset($matches[1]) ? $matches[1] : '';

            // Ganti [keyword] di judul dan konten
            $title = str_replace("[$keyword]", $keyword, $title_with_keyword);
            $spun_content = mm_spin_content(str_replace('[keyword]', $keyword, $content));

            // Data untuk post baru
            $post_data = array(
                'post_title' => $title,
                'post_content' => $spun_content,
                'post_status' => 'publish',
                'post_category' => array($category),
            );

            // Membuat post baru
            $post_id = wp_insert_post($post_data);

            // Jika ada gambar yang dipilih, atur sebagai featured image secara acak
            if (!empty($image_ids)) {
                $random_key = array_rand($image_ids, 1);
                $random_image_id = $image_ids[$random_key];
                set_post_thumbnail($post_id, $random_image_id);
            }
        }
    }
}



add_action('admin_init', 'mm_generate_posts');

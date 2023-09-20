<?php

/**
 * content-section
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
defined('ABSPATH') || exit;
if (carbon_get_theme_option('global_discount_status')) {
    $discount = '<span class="tebal uppercase"> + discount up to ' . carbon_get_theme_option('global_discount') . ' (untuk produk tertentu)</span>';
} else {
    $discount = '';
}
?>
<section id="consec" class="section">
    <div class="container">
        <div id="consec-wr">
            <div id="consec-top">
                <h2 class="section-head-medium">Agen Roller Blinds Surabaya</h2>
            </div>
            <div id="consec-bot">
                <!-- content left -->
                <div id="consec-left" class="consec-col">
                    <p>Surabayablinds.com dikelola oleh Kharisma Jaya selaku <b>agen roller blinds di Surabaya</b>. Situs ini, kami hadirkan untuk seluruh masyarakat di Surabaya yang sedang membutuhkan produk roller blinds berkualitas dengan harga yang jauh lebih murah.</p>
                    <p><b>Toko roller blinds di Surabaya</b> yang kami kelola berada di <?php mm_show_alamat(); ?>. Buka setiap hari kerja mulai jam 10:00 s/d jam 19:00 Sabtu Minggu tetap buka dengan perjanjian sebelum datang.</p>
                    <p>Kami mengenakan <b>Harga roller blinds jauh lebih murah dibanding competitor di Surabaya</b>, Untuk berbelanja roller blinds silahkan datang ke toko atau, anda juga dapat menghubungi marketing officer online kami melalui chat Whatsapp dan panggilan telpon.</p>
                    <p><b>Tersedia banyak pilihan tipe roller blinds</b> mulai dari yang klasik sampai yang modern (motorized blinds) yang sangat canggih karena menggunakan remote control.</p>
                    <p><b>Produk roller blinds</b> yang kami jual merupakan produk-produk roller blinds yang sangat bermutu, kuat dan tahan lama. Bahan penggunaan material dari bahan yang berkualitas tinggi.</p>
                    <p>Beli roller blinds disini <b>GRATIS PENGUKURAN, ONGKIR, PEMASANGAN <?php echo $discount; ?></b>.</p>
                    <p>Toko kami juga <b>jual produk Window blinds lainnya seperti vertical blinds, horizontal blinds, wooden blinds di kota Surabaya</b> dan daerah sekitarnya.</p>
                </div>
                <!-- content right -->
                <div id="consec-right" class="consec-col">
                    <p>Kharisma Jaya Blinds bukan hanya sebagai <b>pusat penjualan roller blind di Surabaya</b> (yang hanya menjual produk-produk window blinds saja). Tetapi kami juga <b>jual gorden rumah sakit anti noda dan anti bakteri, rel gorden rumah sakit di Surabaya Jawa Timur</b>.</p>
                    <p>Kharisma Jaya Blinds juga <b>jual PVC folding door, lantai vinyl di Surabaya</b>. Informasi tentang produk-produk kami, prosedur pemesanan dapat menghubungi marketing kami setiap hari kerja mulai pukul 10:00 sampai 20:00 WIB.</p>
                    <p><b>Merek roller blinds yang kami jual adalah roller blinds merek Sharp Point Blinds dan Shinihci Blinds</b> yang merupakan merek roller blinds paling rekomended dan banyak terpasang di gedung-gedung kantor, rumah sakit, restaurant, hotel, apartemen di Surabaya karena mutu dan kualitasnya yang handal</p>
                    <p>Kharisma Jaya Blinds menyediakan <b>layanan konsultasi seputar produk window blinds dan gorden rumah sakit</b> melalui chat Whatsapp dan telpon (GRATIS).</p>
                    <p>Dan bagi anda yang sedang mencari <b>agen (toko) jual produk roller blinds, vertical blinds, horizontal blind merek Sharp Point &amp; Shinichi Blinds original dengan harga termurah</b> di <span class="biru">Asem Rowo, Benowo, Bubutan, Bulak, Dukuhpakis, Gayungan, Genteng, Gubeng, Gunung Anyar, Jambangan, Karangpilang, Mulyorejo, Pakal, Rungkut, Sawahan, Tambaksari, Tandes, Wonocolo, Wonokromo, Kenjeran, Krembangan, Lakarsantri, Pabean Cantikan, Sambikerep, Semampir, Simokerto, Sukolilo, Sukomanunggal, Wiyung, Tegalsari Surabaya Jawa Timur</span> silahkan hubungi customer service kami.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
/**
 * Function mm_content_section_scripts
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
add_action('wp_footer', function () {
?>
    <style>
        #consec {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        #consec-wr {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        #consec-bot {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .consec-col {
            display: flex;
            flex-direction: column;
        }

        .consec-col p {
            font-size: 13px;
            line-height: 1.5;
        }
    </style>
<?php
});

<?php

/**
 * cta-section
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;
?>
<section id="cta" class="section">
    <div class="container">
        <div id="cta-wr">
            <div id="cta-top">
                <h2 class="section-head">Let's Get in Touch</h2>
                <span class="l-w-75-m-w-100 text-center">Kharisma Jaya Blinds (Surabayablinds.com) siap memberikan pelayanan dan harga terbaik untuk setiap pelanggan kami.</span>
            </div>
            <div id="cta-card-wr">
                <div class="cta-card">
                    <div class="cta-card-img-wr">
                        <img src="<?php echo THEME_IMAGE . 'cs.webp' ?>" title="customer service" alt="customer service">
                    </div>
                    <div class="cta-card-content-wr">
                        <h3 class="section-subhead-small cta-head">Chat</h3>
                        <span>Hubungi kami VIA Chat Whatsapp Senin - Minggu 24jam untuk informasi lebih lengkap.</span>
                        <a class="wa-bg cta-link" href="<?php mm_show_url_wa(); ?>"><i class="fab fa-whatsapp"></i> Chat Whatsapp</a>
                    </div>
                </div>
                <div class="cta-card">
                    <div class="cta-card-img-wr">
                        <img src="<?php echo THEME_IMAGE . 'cs.webp' ?>" title="CS agen horizontal blinds" alt="CS agen horizontal blinds">
                    </div>
                    <div class="cta-card-content-wr">
                        <h3 class="section-subhead-small cta-head">Telepon</h3>
                        <span>Hubungi kami VIA Telepon setiap hari kerja 07:00 - 19:00 WIB untuk informasi lebih lengkap.</span>
                        <a class="call-bg cta-link" href="<?php mm_show_url_call(); ?>"><i class="fas fa-phone"></i> Call Phone</a>
                    </div>
                </div>
                <div class="cta-card">
                    <div class="cta-card-img-wr">
                        <img src="<?php echo THEME_IMAGE . 'cs.webp' ?>" title="CS vertical Blinds" alt="CS vertical Blinds">
                    </div>
                    <div class="cta-card-content-wr">
                        <h3 class="section-subhead-small cta-head">Kirim Email</h3>
                        <span>Anda juga bisa mengirimkan email untuk menyampaikan detail kebutuhan interior design Anda.</span>
                        <a class="email-bg cta-link" href="<?php mm_show_url_email(); ?>"><i class="far fa-envelope"></i> Send Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
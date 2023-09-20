<?php

/**
 * features-section.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;
?>

<section id="feat" class="section">
    <div class="container">
        <?php get_template_part('template-parts/components/discount-component'); ?>
        <div id="feat-wr">
            <div id="feat-top">
                <h2 class="section-head">Beli Window Blind Disini</h2>
                <span class="section-tagline l-width-75-m-width-100">Kharisma Jaya Blinds supplier sekaligus kontraktor yang menjual dan memasang produk interior design khusus roller, vertical, horizontal, wooden, zebra blinds dan jenis horizontal blind lainnya.</span>
            </div>
            <div id="feat-bot">
                <div id="feat-card-wr">

                    <div class="feat-card">
                        <i class="fa-solid fa-pen-ruler"></i>
                        <h3 class="feat-head section-subhead-small">Free Pengukuran</h3>
                        <span class="feat-des">Free biaya pengukuran khusus wilayah Kota Surabaya dan sekitarnya.</span>
                    </div>

                    <div class="feat-card">
                        <i class="fas fa-truck"></i>
                        <h3 class="feat-head section-subhead-small">Free Pengiriman</h3>
                        <span class="feat-des">Free biaya pengiriman dari pabrik langsung dikirim kelokasi pemasangan.</span>
                    </div>

                    <div class="feat-card">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <h3 class="feat-head section-subhead-small">Free Bea Instalasi</h3>
                        <span class="feat-des">Free biaya instalasi (pemasangan) window blind yang Anda pesan disini.</span>
                    </div>

                    <div class="feat-card">
                        <i class="fa-solid fa-star"></i>
                        <h3 class="feat-head section-subhead-small">Produk Berkualitas</h3>
                        <span class="feat-des">100% original Sharp Point Blind produk blind best rekomended di Indonesia.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
add_action('wp_footer', function () {
?>
    <style>
        /**
=========================
* Features
*=========================
*/
        #feat {
            padding-top: 7rem;
            padding-bottom: 7rem;
            margin-top: 3rem;
            background-color: var(--color-accent-3);
            color: var(--color-light-1);
        }

        #feat-wr {
            display: flex;
            flex-direction: column;
            gap: 3rem;
        }

        #feat-top {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        #feat-card-wr {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }

        .feat-card {
            padding: 2rem 1rem;
        }

        .feat-card i {
            font-size: 25px;
        }

        @media screen and (max-width: 767px) {
            #feat-card-wr {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
<?php
});

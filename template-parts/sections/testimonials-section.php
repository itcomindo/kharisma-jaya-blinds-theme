<?php

/**
 * testimonials-section.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;
?>

<section id="testi" class="section">
    <div class="container">
        <div id="testi-wr">
            <div id="testi-top" class="w100">
                <h2 id="testi-head" class="section-head text-center with-ornament">Testimonials</h2>
                <span class="lw75-mw100 text-center">10 tahun lebih memberikan layanan terbaik dan fokus pada kepuasan customer.</span>
            </div>
            <div id="testi-card-wr" class="w100">

                <div class="testi-card">
                    <span class="testi-name">Sidarta</span>
                    <blockquote class="testi-content">Harga roller blinds disini jauh lebih murah dan pelayanannya juga excelent.</blockquote>
                </div>

                <div class="testi-card">
                    <span class="testi-name">Hastomo</span>
                    <blockquote class="testi-content">Kantor kami memakai vertical blinds pemasangannya sangat rapih, cepat dan teliti.</blockquote>
                </div>

                <div class="testi-card">
                    <span class="testi-name">Boby Paat</span>
                    <blockquote class="testi-content">Restaurant kami menggunakan horizontal dan roller blinds outdoor kualitas nomor wahid!.</blockquote>
                </div>

                <div class="testi-card">
                    <span class="testi-name">Elda</span>
                    <blockquote class="testi-content">Best rekomended seller deh pokoknya semuanya ditangani dengan ahlinya bikin happy.</blockquote>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
/**
 * Function mm_testimonials_scripts
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
add_action('wp_footer', function () {
?>
    <style>
        /**
=========================
* Testimonial
*=========================
*/
        #testi {
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        #testi-wr {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 3rem;
            align-items: center;
        }

        #testi-head.with-ornament {
            font-family: var(--font-writing);
            letter-spacing: 2px;
            position: relative;
        }

        #testi-head.with-ornament:before {
            content: "";
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 40px;
            position: absolute;
            bottom: -30px;
            background: url("<?php echo THEME_IMAGE . 'ornamens.png' ?>") no-repeat center center;
        }

        #testi-top span {
            margin-top: 3rem;
        }

        #testi-card-wr {
            width: 100%;
            display: block;
            /* display: grid; */
            /* grid-template-columns: repeat(4, 1fr); */
            /* gap: 1rem; */
        }

        .testi-card {
            width: calc(100% / 3 - 1rem);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
            gap: 1rem;
            margin: 0 1rem;
            text-align: center;
        }

        .testi-content {
            padding: 0;
            margin: 0;
            background-color: #eee;
            font-size: 90%;
            padding: 1rem;
            border-radius: 36px 45px 36px 45px;
        }




        @media (max-width: 767px) {
            .testi-card {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .testi-card {
                width: 100%;
            }
        }
    </style>
<?php
});
